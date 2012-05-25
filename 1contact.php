<?php

	$conn = new PDO("mysql:dbname=projetpdo;host=localhost","root","");		//Connexion à la BDD
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			//Active le Mode Exception
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);		//Les résultats seront rangés par défault dans un tableau associatif
	$conn->exec("SET NAMES 'utf8'");						//Transaction avec la BDD en UTF8
	
	echo '<ul>';
	$query = "SELECT * FROM contact";
	$result = $conn->query($query);
	while($row = $result->fetch()) {
		echo '<li>'.$row['cid'].'</li>';
		echo '<li>'.$row['name'].'</li>';
		echo '<li>'.$row['surname'].'</li>';
		echo '<li>'.$row['tel'].'</li>';
		echo '<li>'.$row['email'].'</li>';
	}
	echo '</ul>'
	
?>
