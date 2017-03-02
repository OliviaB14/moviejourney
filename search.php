<?php
	try{

		//open connection
		$bdd = new PDO(
			"mysql:host=localhost;dbname=movie_journey_bdd",
			"root",
			""
		);

		$bdd->exec("SET NAMES 'UTF8'");
	} 

	catch(PDOException $e){
		echo $e->getMessage();
	}
?>

<!DOCTYPE html>
<html lang="fr"><!-- language -->
	<head>
		<!-- META TAGS -->
		<!-- encoding --><meta charset="utf-8"/>
		<!-- mobile friendly tag --><meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" /><!-- bootstrap -->
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/><!-- font awesome -->
		<link rel="stylesheet" href="style.css" type="text/css" /><!-- main stylesheet -->
		<title>Movie Journey</title>
	</head>

	<body>
	
		<?php
		include('header.php')
		?>



		<!-- MAIN CONTAINER : all page is contained -->
		<div class="container-fluid">

			<div class="row">
				<!-- search entry -->
				<div class="col-md-12">
					<h2>Vous avez recherché : 
					<?php 
						/* test recherche */ $search = "Astérix";
						echo $search;//$_GET["s"]; 
					?></h2>
				</div>
			</div>

			<?php
				$requete = "SELECT * FROM movie WHERE name LIKE '%$search%'";
				//$query = $bdd->prepare($requete);
				$query = requete_bdd($bdd, $requete);
				$query->execute();
					
			?>
			<div class="row">
				<div class="col-xs-6 col-lg-4">
					<!-- cette colonne contiendra image du film ou lieu culte -->
					<?php
						for($i=0; $row=$query->fetch(); $i++){
						echo "<img src='". $row['backdrop_path'] . " ' class='img-responsive img-rounded'/>";
					?>
				</div>
				<div class="hidden-xs col-lg-4">
					<!-- cette colonne contiendra une description sur un grand écran seulement -->
					<?php
						
						echo $row['name'];
					}
					?>
				</div>
				<div class="col-lg-4 col-xs-6">
				<!-- liens rapides -->
					<div class="btn">Voir plus...</div>
					<div class="btn">Ajouter aux favoris</div>
				</div>
			</div>

		</div>

		<?php
		include('footer.php');

		requete_bdd($bdd,$requete);

		function requete_bdd($bdd, $req){
			/* 
				exercice 1 solution:
				will return all data from the database as json data
				
				------- ARGUMENTS
				$req is a string
				$bdd is the database

			*/
			
			$query = $bdd->prepare($requete);
			return $query;
			
		}

		function phptojson($data){
			/*
				will transform a php table into a json content

				$data : array
			*/
			return json_encode($data, JSON_UNESCAPED_SLASHES);
		}


		// close connection
		$bdd = null;
		?>
	</body>
</html>