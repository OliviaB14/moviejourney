<?php
	require('base.php');
	
	$place_id = $_GET[id_lieu];
	$user_id = $_SESSION['id'];
	
	if ($_GET[proposition] == 'lieu') {
		$chaine = "DELETE FROM usersfavorite_places WHERE place_id = '$place_id' AND user_id = '$user_id'";
		//prepare request
		$statement = $connection->prepare($chaine);
		// bind value and execute query
		$statement->execute();
	} else {
		$chaine = "DELETE FROM usersfavorite_movies WHERE movie_id = '$place_id' AND user_id = '$user_id'";
		//prepare request
		$statement = $connection->prepare($chaine);
		// bind value and execute query
		$statement->execute();
	}
?>