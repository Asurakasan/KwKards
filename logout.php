<?php 


		if(isset($_POST['deconec']))
		{
			$req=$db->prepare("UPDATE user SET koins = :koins, level = :level, xp = :xp, spawn = :spawn, claw = :claw, king = :king  
							WHERE  u_id = :id");
			$req->execute([
			'koins' => $_SESSION['koins'],
			'level' => $_SESSION['level'],
			'xp' => $_SESSION['xp'],
			'spawn' => $_SESSION['spawn'],
			'claw' => $_SESSION['claw'],
			'king' => $_SESSION['king'],
			'id' => $_SESSION['u_id']
			]);
			session_destroy();
?>							
			<meta http-equiv="refresh" content="0;url=Connexion.php">
<?php 	}
	
?>	
	