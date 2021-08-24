<?php
		
			
			if(isset($_POST['formsend']))
			{
				extract($_POST);
				
				
				if(!empty($password) && !empty($cpassword) && !empty($semail))
				{
					if($password = $cpassword)
					{
						
						$options = ['cost' => 12,];
						$hashpass = password_hash($password , PASSWORD_BCRYPT, $options);
						
					
						
						$c = $db->prepare("SELECT email FROM user WHERE email = :email");
						$c2 = $db->prepare("SELECT pseudo FROM user WHERE pseudo = :pseudo");
						$p = $db->prepare("SELECT pseudo FROM user WHERE pseudo = :parrain");
						$c->execute(['email' => $semail]);
						$c2->execute(['pseudo' => $pseudo]);
						$p->execute(['parrain' => $parrain]);
						$results = $c->rowCount();
						$results2 = $c2->rowCount();
						$resultsp = $p->rowCount();
						
						
						
						if($results == 0)
						{
							if($results2 == 0)
							{
								if(!empty($parrain))
								{
									if($resultsp == 1)
									{
										$q = $db->prepare("INSERT INTO user(email, password, pseudo, parrain, koins, spawn, claw, king, level) VALUES(:email, :password, :pseudo, :parrain, :koins, :spawn, :claw, :king, :level)");
										$q->execute([
										'pseudo' => $pseudo,
										'email' => $semail,
										'password' => $hashpass,
										'parrain' => $parrain,
										'koins' => $koins = 1500,
										'spawn' => $spawn = 0,
										'claw' => $claw = 1,
										'king' => $king = 1,
										'level' => $level = 1
										]);	
										echo "Le compte a été créé avec parrainage!";
											?>
							
									<meta http-equiv="refresh" content="0;url=Connexion.php">
							
							<?php
									}
									else
									{
										echo "Ce parrain n'existe pas";
									}
								}
								else
								{
									$q = $db->prepare("INSERT INTO user(email, password, pseudo, koins, spawn, claw, king, level) VALUES(:email, :password, :pseudo, :koins, :spawn, :claw, :king, :level)");
										$q->execute([
										'pseudo' => $pseudo,
										'email' => $semail,
										'password' => $hashpass,
										'koins' => $koins = 0,
										'spawn' => $spawn = 0,
										'claw' => $claw = 1,
										'king' => $king = 0,
										'level' => $level = 1
										]);	
										echo "Le compte a été créé !";
?>
							
									<meta http-equiv="refresh" content="0;url=Connexion.php">
							
							<?php										
								}
							}
							else
							{
								echo "Ce pseudo est déjà utilisé !";
							}
						}
						else
						{
							echo "Cette email est déjà utilisé !";
						}	
					}									
				}	
			}	

?>