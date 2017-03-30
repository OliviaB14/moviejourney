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
		<link rel="stylesheet" href="css/search.css" type="text/css" /><!-- main stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/overlay-bootstrap.min.css"/><!-- overlay stylesheet -->
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

					/* if the movie isn't in the database, it shows an error message
						or if user wanted to add it to the website, it makes a sql request */ 
					if($int == 0){
						if(isset($_POST["propose_a_movie"])){
							$moviePropose = $_POST['moviePropose'];
							$placePropose = $_POST['placePropose'];
							$requete = "INSERT INTO place_added VALUES ('$moviePropose', '$placePropose')";
							$moviequery = requete_bdd($connection, $requete);
							$moviequery->execute();

							echo "<div class='col-lg-8 col-lg-offset-2 alert alert-success'><strong>Merci!</strong> L'équipe de Movie Journey va étudier votre proposition.</div>";
						} else{
							echo "<div class='col-lg-8 col-lg-offset-2 alert alert-warning search_error' role='alert'><strong>" . $search . "</strong> ne correspond à aucun résultat...</div>";
						}
					?>
			</div>
			

			<!-- search bar -->
			<div class="searchbarDiv row">
				<form class="form-inline col-lg-8 col-md-12 col-lg-offset-2 " method="GET" action="search.php" id="searchinput">
					<div class="dropdown col-lg-2 col-md-2 styled-select">
					  <select name="opt">
						<option>Film<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></option>
						<option>Thème de film</option>
						<option>Lieux cultes</option>
					  </select>
					</div>
					<div class="form-group col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<label for="s" class="sr-only">Recherche</label>
						<input type="search" class="form-control searchbar" name="search" placeholder="Rechercher un film, un lieu, un thème..."/>
					</div>
					<button type="submit" class="btn btn-default col-md-1 col-xs-12 col-lg-1 col-md-hidden search_btn"> <span class="glyphicon glyphicon-search"></span></button>
				</form>
			</div>

			<!-- 'propose a movie' button -->
			<div class="row propose_a_movie">
				<div class="col-lg-12">
					<div class="btn col-xs-12 col-lg-offset-2 col-lg-8" data-toggle="modal" data-target="#propose"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Proposer un film au site</div>

					<div class="modal fade in" role="dialog" id="propose" aria-hidden="false">
						<div class="modal-backdrop">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button class="close" data-dismiss="modal">
											<span aria-hidden="true">x</span>
											<span class="sr-only">close</span>
										</button>
										Proposer un film
									</div>
									<div class="model-body">
									<!-- form for the movie proposal -->
										<form method="POST" class="row">
										  <div class="form-group form-inline col-lg-12">
										    <label for="moviePropose" class="col-lg-2">Titre du film</label>
										    <div class="col-lg-10">
										    <input type="text" class="form-control" id="moviePropose" placeholder="Titre du film" name="moviePropose"/>
										    </div>
										  </div>
										  <div class="form-group form-inline col-lg-12">
										    <label for="placePropose" class="col-lg-2">Nom ou description du lieu</label>
										    <div class="col-lg-10">
										    <input type="text" class="form-control" id="placePropose" placeholder="Nom du lieu" name="placePropose"/>
										    <p class="help-block ROW">Une indication pour nos géniaux développeurs ! ;)</p>
										    </div>
										  </div>
										  <div class="form-group form-inline col-lg-12">
										    <label class="col-lg-2">Poster du film</label>
										    <input type="file" class="col-lg-offset-5">
										    <p class="help-block ROW">Télécharger l'affiche du film (facultatif)</p>
										  </div>
										  	<div class="form-group form-inline col-lg-12">
										    <label class="col-lg-2">Adresse email</label>
										    <input type="email" class="form-control" placeholder="Email">
										  </div>
										  		<button type="submit" class="btn btn-default" name="propose_a_movie" id="propose_a_movie">Proposer</button>
											</form>
											

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
			<?php if ($option == "Lieux cultes") { ?>
				<a href="<?php echo 'place.php?place=' . $value[0] ?>"><div class="btn btn-lg btn-default read-more">Voir plus...</div></a>
			<?php } else { ?>
				<a href="<?php echo 'movies.php?page=' . $value[0] ?>"><div class="btn btn-lg btn-default read-more">Voir plus...</div></a>
			<?php } ?>
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
			<div class="alert alert-danger search_error" role="alert">Aucun résultat ne correspond à votre recherche... Voulez-vous proposer ce film ?</div>
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

		?>

		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>



	</body>
</html>