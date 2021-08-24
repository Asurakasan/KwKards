<?php
	include("database2.php");
	$req=$db->prepare("select * from kard where id=? limit 1");
	$req->setFetchMode(PDO::FETCH_ASSOC);
	$req->execute(array($_GET["id"]));
	$tab=$req->fetchAll();
	echo $tab[0]["image"];
?>