<?php
	require('base.php');
	
	global $connection;
	
	$id_user = $_SESSION['id'];
	$place_id = $_GET['id_lieu'];
	
	$chaine = "INSERT INTO usersfavorite_places (user_id, place_id) VALUES (:user_id, :place_id)";
	//prepare request
	$statement = $connection->prepare($chaine);
	// bind value and execute query
   	$statement->bindvalue(":user_id", $id_place, PDO::PARAM_INT);
	$statement->bindvalue(":place_id", $id_user, PDO::PARAM_INT);
	$statement->execute();

?>