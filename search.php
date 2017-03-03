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


		<!-- MAIN CONTAINER : all page is contained -->
		<div class="container-fluid">

			<div class="row">
				<!-- search entry -->
				<div class="col-md-12"> 
					<?php 
						
						if(!empty($_GET["search"])){
							/* if the search input is fufilled by the user, $search is the variable that will contain the words */
							$search = $_GET["search"];
							echo "<h1>Vous avez recherché : <span class='search'>" . $search . "</span></h1>";
						?>
				</div>
			</div>

			<?php
				
					
			?>
			<div class="row">
						<?php
							/* sql request to search for the film */
							$requete = "SELECT * FROM movie WHERE name LIKE '%$search%'";
							$query = requete_bdd($connection, $requete);
							$query->execute();


							$var = $query->fetch();

							/* if the movie isn't in the database, it shows an error message */ 
							if(empty($var)){
								echo "<div class='alert alert-warning search_error' role='alert'>" . $search . " ne correspond à aucun résultat... Réessayez.</div>";
							?>
							<div class="row">
						<form class="form-inline" method="GET" action="search.php">
					<div class="dropdown col-lg-2 col-md-2">
					  <select>
					  	<option>Recherche<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></option>
						<option>Film</option>
						<option>Thème de film</option>
						<option>Lieux cultes</option>
					  </select>
					</div>
					<div class="form-group col-lg-8 col-md-10">
						<label for="s" class="sr-only">Recherche</label>
						<input type="search" class="form-control" name="search" placeholder="Rechercher un film, un lieu, un thème..."/>
					</div>
				</form>
					</div>
					<?php
							} else{
								/* this will re-execute the search request since the first result is contained in $var */
								$query = requete_bdd($connection, $requete);
								$query->execute();
								/* this boucle will create the bootstrap grid for each movie */
								for($i=0; $row=$query->fetch(); $i++){
						?>

					<div class='col-xs-6 col-lg-2 search-r'>
					<!-- this column will contain the movie poster -->
					<?php
						echo "<img src='" . $row['backdrop_path'] . "' class='img-responsive img-rounded search-img'/>";
					?>
					</div>

					<div class="hidden-xs col-lg-2">
					<!-- this column will contain the movie resume only on a big screen -->
					<?php
						echo $row['name'];
					?>
					</div>

					<div class="col-lg-2 col-xs-6">
					<!-- quick links to add the corresponding movie to user favorites and to see its detailed descriptions -->
						<div class="btn">Voir plus...</div>
						<div class="btn">Ajouter aux favoris</div>
					</div>
					<?php
							}
							}
						}else {
							/* if the search input isn't completed
							it will show a search form */
								
						?>

					<!-- 



					rajouter directementla recherche avancée !



					 -->
					<div class="alert alert-danger search_error" role="alert">Aucun résultat ne correspond à votre recherche... Voulez-vous réessayer ?</div>
					<div class="row">
						<form class="form-inline" method="GET" action="search.php">
					<div class="dropdown col-lg-2 col-md-2">
					  <select>
					  	<option>Recherche<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></option>
						<option>Film</option>
						<option>Thème de film</option>
						<option>Lieux cultes</option>
					  </select>
					</div>
					<div class="form-group col-lg-8 col-md-10">
						<label for="s" class="sr-only">Recherche</label>
						<input type="search" class="form-control" name="search" placeholder="Rechercher un film, un lieu, un thème..."/>
					</div>
				</form>
					</div>

					<?php
				}
					?>
				


				</div>
			</div>

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