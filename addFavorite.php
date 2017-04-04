<?php
	require('base.php');
	
	$place_id = $_GET[id_lieu];
	
	if ($_GET[proposition] == 'lieu') {
		$chaine = "INSERT INTO usersfavorite_places (user_id, place_id) VALUES (:user_id, :place_id)";
		//prepare request
		$statement = $connection->prepare($chaine);
		// bind value and execute query
		$statement->bindvalue(":user_id", $_SESSION['id'], PDO::PARAM_STR);
		$statement->bindvalue(":place_id", $place_id, PDO::PARAM_STR);
		$statement->execute();
	} else {
		$chaine = "INSERT INTO usersfavorite_movies (user_id, movie_id) VALUES (:user_id, :movie_id)";
		//prepare request
		$statement = $connection->prepare($chaine);
		// bind value and execute query
		$statement->bindvalue(":user_id", $_SESSION['id'], PDO::PARAM_STR);
		$statement->bindvalue(":movie_id", $place_id, PDO::PARAM_STR);
		$statement->execute();
	}
	
?>