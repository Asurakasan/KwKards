<?php 


		if(isset($_POST['formlogin']))
		{
			extract($_POST);
			
			if(!empty($lemail) && !empty($lpassword))
			{
					$q = $db->prepare("SELECT * FROM user WHERE email = :email");
					$q->execute(['email' => $lemail]);
					$results = $q->fetch();
					
					if($results == true)
					{
						$hashpassword = $results['password'];
						if(password_verify($lpassword, $hashpassword))
						{
							$_SESSION['u_id'] = $results['u_id'];
							$_SESSION['email'] = $results['email'];
							$_SESSION['pseudo'] = $results['pseudo'];
							$_SESSION['date'] = $results['date'];
							$_SESSION['parrain'] = $results['parrain'];
							$_SESSION['level'] = $results['level'];
							$_SESSION['koins'] = $results['koins'];
							$_SESSION['xp'] = $results['xp'];
							$_SESSION['spawn'] = $results['spawn'];
							$_SESSION['claw'] = $results['claw'];
							$_SESSION['king'] = $results['king'];
							?>
							
							<meta http-equiv="refresh" content="0;url=Mon-compte.php">
							
							<?php
						}
						else
						{
							echo "Mot de passe incorrect";
						}
					}
			}
			else
			{
				echo "Veuillez compléter l'ensemble des champs";
			}
		}
?>	
		