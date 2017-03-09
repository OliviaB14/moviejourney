<?php
	// databse connection
	require 'base.php';
	// Character encoding of the database
	$connection->exec("SET NAMES 'utf8'");
	
?>

<!DOCTYPE html>
<html lang="fr"><!-- language -->
	<head>
		<!-- META TAGS -->
		<!-- encoding --><meta charset="utf-8"/>
		<!-- mobile friendly tag --><meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" /><!-- bootstrap -->
		<link rel="stylesheet" href="css/style.css" type="text/css" /><!-- main stylesheet -->
		<link rel="stylesheet" href="css/searchphp_style.css" type="text/css" /><!-- main stylesheet -->
		<title>Movie Journey</title>
	</head>

	<body>
	
		<?php
		include('header.php')
		?>
		
		<div class="container-fluid">
		
		<ol class="breadcrumb">
		<?php 
			if (empty($_GET['page'])) {
		  		echo '<li class="active">Lieux cultes</li>';
			} else {
				echo '<li><a href="movies.php" title="Lieux Cultes">Lieux cultes</a></li>';
				//page correspond au film auquel appartient le lieu culte
	    		//page active correspond au lieu culte
				//echo '<li class="active">'.$_GET["page"].'</li>';
			}
		?>
		</ol>
		
		
		</div>
		
		<?php

		// include the footer file
		include('footer.php');

		function requete_bdd($bdd, $req){
			/* will return all data from the database as json data
				
				------- ARGUMENTS
				$req is a string
				$bdd is the database
			*/
			
			$query = $bdd->prepare($req);
			return $query;
			/* returned variable is an pdo object */
		}

		// close connection
		$connection = null;
		?>

	</body>
</html>