<?php session_start();
include 'database.php';
 $req=$db->prepare("SELECT k.img, k.nom FROM kard k 
					INNER JOIN ukards uk ON uk.KardID = k.id
					INNER JOIN user u ON u.u_id = uk.UserID
					WHERE u.u_id=? ");
 $req->execute(array($_SESSION['u_id']));
 $tab=$req->fetchAll();
 $total = count($tab);
 $i = 0;
 
for($i = 0; $i < $total; $i++){
	echo $tab[$i]['nom'];
	$image = $tab[$i]['nom'];
?>			
	<?php echo '<img src="'.$image.'" alt=""/>';?>
	<?php
}
	?>
	
		
 
 