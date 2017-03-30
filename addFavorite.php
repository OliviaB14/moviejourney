<?php
	require('base.php');
	
	$place_id = $_GET[id_lieu];
	
	$chaine = "INSERT INTO usersfavorite_places (user_id, place_id) VALUES (:user_id, :place_id)";
	//prepare request
	$statement = $connection->prepare($chaine);
	// bind value and execute query
   	$statement->bindvalue(":user_id", $_SESSION['id'], PDO::PARAM_STR);
	$statement->bindvalue(":place_id", $place_id, PDO::PARAM_STR);
	$statement->execute();
?>