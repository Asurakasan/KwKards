<?php
	if(isset($_POST["valider"])){
		include("database2.php");
		$req=$db->prepare("insert into kard(nom,rare,img) values(?,?,?)");
		$req->execute(array($_FILES["image"]["name"], $_FILES["image"]["size"],file_get_contents($_FILES["image"]["name"])));
	}


?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    </head>
    <body>	
		<h1>image</h1>
		<form name="fo" method="post" action="" enctype="multipart/form-data">
			<input type="file" name="image" /><br/>
			<input type="submit" name="valider" value="Charger" />
		</form>
    </body>
</html>