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
						/* if the search is done in the movies.php's input. the search is only about movies so 'opt' is empty. */

						if(!empty($_GET["search"])){
							/* if the search input is fufilled by the user, $search is the variable that will contain the words */
							$search = $_GET["search"];

							/* $option is the search option selected by the user for their research  - they have the choice between four options : 'search (all categories)' 'movie' 'theme' 'famous places' */
							if (empty($_GET['opt'])) {
								$option = 'Film';
							} else {
								$option = $_GET['opt'];
							}

							/* print search input */
							echo "<h1>Vous avez recherché : <span class='search'>" . $search . "</span></h1>";
						?>
				</div>
			</div>
			<div class="row">
						<?php
							if($option == 'Film'){
								//search happens in the movie table, name column
								$requete = 
									"SELECT name, backdrop_path, description FROM movie 
									WHERE name LIKE '%$search%'";
							} else if ($option == "Thème de film"){
								// search happens in the type table, type column and use joints to return movies
								$requete = 
									"SELECT movie.name, movie.backdrop_path, movie.description FROM type, movie, movietype 
									WHERE type.type LIKE '%$search%'
									AND type.id = movietype.type_id
									AND movietype.movie_id = movie.id";
							} else{
								$option = "Lieux cultes";
								//search happens in the place table, name column
								$requete = 
									"SELECT name, photo_path, description FROM place
									WHERE name LIKE '%$search%'";
							}
							$query = requete_bdd($connection, $requete);
							$query->execute();

							$int = $query->rowCount();

							/* if the movie isn't in the database, it shows an error message */ 
							if($int == 0){
								echo "<div class='alert alert-warning search_error' role='alert'>" . $search . " ne correspond à aucun résultat... Réessayez.</div>";
							?>
							<!-- search bar -->
						<div id="searchbarDiv" class="row">
							<form class="form-inline" method="GET" action="search.php" id="searchinput">
								<div class="dropdown col-lg-2 col-md-2" id="styled-select">
								  <select name="opt">
									<option>Film<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></option>
									<option>Thème de film</option>
									<option>Lieux cultes</option>
								  </select>
								</div>
								<div class="form-group col-lg-8 col-md-10">
									<label for="s" class="sr-only">Recherche</label>
									<input type="search" class="form-control" id="searchbar" name="search" placeholder="Rechercher un film, un lieu, un thème..."/>
								</div>
								<button type="submit" class="btn btn-default col-lg-2 col-md-hidden">Rechercher <img src="image/loupe.png" alt="Rechercher"/></button>
							</form>
						</div>
					</div>
					<?php
							} else{

								$query->execute();
								/* this boucle will create the bootstrap grid for each movie */
								$row=$query->fetchAll();
								$int = 0;
								foreach($row as $value) {
									$int++;
									if ($int % 2 != 0) {
										echo "<div class='row'>";
									}
					?>
						<div class='col-xs-6 col-lg-2 search-r'>
						<!-- this column will contain the movie poster -->
						<?php
							echo "<img src='" . $value[1] . "' class='thumbnail img-responsive search-img'/>";
						?>
						</div>
	
						<div class="hidden-xs hidden-md col-lg-2">
						<!-- this column will contain the movie resume only on a big screen -->
						<p class="movieTitle">
						<?php
							echo $value[0];
						?>
						</p>
						<p class="movieDesc"><?php echo $value[2] ?></p>
						</div>
	
						<div class="col-lg-2 col-xs-6">
						<!-- quick links to add the corresponding movie to user favorites and to see its detailed descriptions -->
							<a href="<?php echo 'movies.php?page=' . $value[0] ?>"><div class="btn btn-lg btn-default read-more">Voir plus...</div></a>
							<button type="button" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true" title="Ajouter le film à mes favoris"></span></button>
						</div>
					<?php
								if ($int % 2 == 0) {
									echo "</div>";
								}
								}
								}
						}else {
							/* if the search input isn't completed
							it will show a search form */
								
						?>

					<!-- 



					ajouter le bouton de proposition de film ici !!


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