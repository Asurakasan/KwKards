<?php session_start(); 
include 'database.php';


$IAreq=$db->prepare("SELECT * FROM kard WHERE id < 200 ORDER BY rand() limit 5");
		$IAreq->execute();
		$IAtab=$IAreq->fetchAll();
		$t1 = $IAtab[0][3];
		$IA1image = $IAtab[0][4	];
		echo $t1;
		echo '<img src="'.$IA1image.'" alt="" width="130" height="190"/>';


$Ureq=$db->prepare("SELECT k.* FROM kard k 
		INNER JOIN ukards uk ON uk.KardID = k.id
		INNER JOIN user u ON u.u_id = uk.UserID
		WHERE k.id < 200 AND u.u_id=? ORDER BY k.id limit 5 ");
	$Ureq->execute(array($_SESSION['u_id']));
	$Utab=$Ureq->fetchAll();
	$U1 = $Utab[0]["valeur"];
	$U1image = $Utab[0]["image"];
	$U2 = $Utab[1]["valeur"];
	echo '<img src="'.$U1image.'" alt="" width="130" height="190"/>';
	
	echo $U1;
	echo $U2;
	

?>