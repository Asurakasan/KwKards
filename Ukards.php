<?php
include 'database.php';
$del = 1;
$Fclick = false;
$Pclick = false; 

if(isset($_POST['BTspawn']))
{
	
	$k1 = rand(200, 499);
	$k2 = rand(200, 499);
	$k3 = rand(200, 499);
	$k4 = rand(200, 499);
	$k5 = rand(200, 499);
	$_SESSION['K1'] = $k1;
$_SESSION['K2'] = $k2;
$_SESSION['K3'] = $k3;
$_SESSION['K4'] = $k4;
$_SESSION['K5'] = $k5;
	$p = $db->prepare("INSERT INTO ukards(UserID, KardID) VALUES(:u_id, :k)");
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k1]);	
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k2]);	
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k3]);	
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k4]);
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k5]);
		?>
	<meta http-equiv="refresh" content="0;url=Anim.php">
	<?php
	$_SESSION['spawn'] -= 1;
}
if(isset($_POST['fermer']))
{
	
	$req=$db->prepare("UPDATE user SET spawn = :spawn, claw = :claw, king = :king 
							WHERE  u_id = :id");
		$req->execute(['spawn' => $_SESSION['spawn'],'claw' => $_SESSION['claw'], 'king' => $_SESSION['king'], 'id' => $_SESSION['u_id']]);
	sleep(1);
	
	?>
	<meta http-equiv="refresh" content="0;url=My-Roster.php">
	<?php
}
if(isset($_POST['BTclaw']))
{
	
	
	sleep(1);
	$k1 = rand(200, 499);
	$k2 = rand(200, 499);
	$k3 = rand(200, 499);
	$k4 = rand(1, 199);
	$k5 = rand(1, 199);
	$_SESSION['K1'] = $k1;
$_SESSION['K2'] = $k2;
$_SESSION['K3'] = $k3;
$_SESSION['K4'] = $k4;
$_SESSION['K5'] = $k5;
	$p = $db->prepare("INSERT INTO ukards(UserID, KardID) VALUES(:u_id, :k)");
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k1]);	
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k2]);	
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k3]);	
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k4]);
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k5]);
	if($k1 > 0){
		sleep(1);
		?>
	<meta http-equiv="refresh" content="0;url=Anim.php">
	<?php
	$_SESSION['claw'] -= 1;
	}
}	
if(isset($_POST['BTking']))
{
	
	$k1 = rand(1, 199);
	$k2 = rand(1, 199);
	$k3 = rand(1, 199);
	$k4 = rand(1, 199);
	$k5 = rand(1, 199);
	$_SESSION['K1'] = $k1;
$_SESSION['K2'] = $k2;
$_SESSION['K3'] = $k3;
$_SESSION['K4'] = $k4;
$_SESSION['K5'] = $k5;
	$p = $db->prepare("INSERT INTO ukards(UserID, KardID) VALUES(:u_id, :k)");
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k1]);	
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k2]);	
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k3]);	
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k4]);
		$p->execute(['u_id' => $_SESSION['u_id'],'k' => $k5]);
		?>
	<meta http-equiv="refresh" content="0;url=Anim.php">
	<?php
	$_SESSION['king'] -= 1;
}


	
	
?>
