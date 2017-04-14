<?php

	// this page will delete user account (all their infos) from the database and therefor deconnect them

	require('base.php');

	$user = $_SESSION['id']; // we get user id back from base.php and stock it in variable $user

	if(isset($_POST['deleting_account'])){
		$delUser = "DELETE FROM users WHERE users.id = '$user'";
		$delTypes = "DELETE FROM userstypes WHERE userstypes.user_id = '$user'";
		$delMovies = "DELETE FROM usersfavorite_movies WHERE usersfavorite_movies.user_id = '$user'";
		$delPlaces = "DELETE FROM usersfavorite_places WHERE usersfavorite_places.user_id = '$user'";

		if(((sqlrequest($delUser)) && (sqlrequest($delTypes))) && (sqlrequest($delMovies) && sqlrequest($delPlaces)){
			// this redirection will destroy the session
			header('location: deconnexion.php');
		}
	}

	function sqlrequest($request, $bdd){
		global $connection;
		if($connection->query($request)){
			return true;
		} else {
			return false;
		}
	}
?>