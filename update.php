<?php session_start();
include 'database.php';
if(isset($_POST['upload'])){

$req=$db->prepare("UPDATE USER SET koins = :xp 
					WHERE  u_id = :id");
$req->execute(['xp' => $_SESSION['xp'], 'id' => $_SESSION['u_id']]);
}	
?>