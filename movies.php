<?php
  // Connect to the database
  require 'base.php';
  
  // Character encoding of the database
  $connection->exec("SET NAMES 'utf8'");
  
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8"> <!-- encoding -->

		<!-- STYLESHEETS FILES -->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/breadcrumb.css" rel="stylesheet" type="text/css"/>
		<link href="css/movies.css" rel="stylesheet" type="text/css"/>

		
		<!--font-family title -->

		<title>Liste de films - Movie Journey</title> <!-- page title -->
	</head>

	<body>
		<?php
			include('header.php');
		?>

		<!-- MAIN CONTAINER : all page is contained -->
		<div class="container-fluid">

		<!-- breadcrumb to show the user where they are on the website -->
			<ol class="breadcrumb">
				<?php if (empty($_GET['page'])) {
					  	echo '<li class="active">Films</li>';
					  } else {
						echo '<li><a href="movies.php" title="Films">Films</a></li><li class="active">'.$_GET["page"].'</li>';
					  }
				?>
			</ol>

			<div class="row">
				<!-- Affichage de l'alphabet pour la navigation dans les lieux cultes 
				Génération de chaque letre/lien à partir d'un tableau contenant l'alphabet -->
				<div id="nav-recherche-film">
					<ul class="nav nav-pills inner-nav-recherche-film hidden-xs col-md-10">
						<li role="presentation" class="first-item-recherche"><a class="ancre-recherche-film" href="#"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a></li>
						<?php
						$alphabet = range("A","Z");
						
						foreach($alphabet as $lettre){
							if (!empty($_GET['page']) && ($_GET['page'] == $lettre)) {
								echo '<li role="presentation" class="active item-recherche"><a class="lettre-recherche-film" href="movies.php?page='.$lettre.'">'.$lettre.'</a></li>';
							} else {
								echo '<li role="presentation" class="item-recherche"><a class="lettre-recherche-film" href="movies.php?page='.$lettre.'">'.$lettre.'</a></li>';
							}
						}
						?>
					</ul>

					<!-- search form -->
					<div class="col-xs-6 col-md-2 form-search-movies">
						<form class="form-inline inner-form-search-movies" method="GET" action="search.php">
							<div class="input-group">
							  <input type="search" class="form-control" name="search" placeholder="Rechercher...">
							  <span class="input-group-btn">
								<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
							  </span>
							</div><!-- /input-group -->
						</form>
					 </div>
					 <!-- end of search form -->
				</div>
			</div>
			
			<!-- randomly shows places 
			On pourra par la suite afficher les lieux aléatoirement en fonction des préférences de l'utilisateur s'il est connecté-->	
			<?php
			// user first come on the page 
			if (empty($_GET['page'])) {
				// création de la requête
				$sql = 'SELECT * FROM movie ORDER BY rand()';  
				// lancement de la requête et on impose un message d'erreur si la requête ne se passe pas bien (or die)
				$req = $connection->prepare($sql); 
				$req->execute();
			?>
			
			<div class="row">
				<div class="col-xs-6 col-md-3 text-center">	
					<div class="thumbnail film-movies"> 
						<?php
						$rows = $req->fetch();
						?>
						<!-- place picture -->
						<img class="image-film-movies img-responsive" src="<?php echo $rows['backdrop_path'] ?>" alt="Photo du lieu"/>
						<div class="caption desc-image-film-movies">
							<p class="nom-film-movies"><?php echo $rows['name']; ?></p>
							<a href="movies.php?page=<?php echo $rows['name'];?>" class="btn btn-xs btn-primary" role="button" title="Voir lieux cultes associés">Voir lieux cultes associés</a>
						</div>
					</div>
				</div>
					
				<div class="col-xs-6 col-md-3 text-center">	
					<div class="thumbnail film-movies"> 
						<?php
						$rows = $req->fetch();
						?>
						<!-- place picture -->
						<img class="image-film-movies img-responsive" src="<?php echo $rows['backdrop_path'] ?>" alt="Photo du lieu"/>
						<div class="caption desc-image-film-movies">
							<p class="nom-film-movies"><?php echo $rows['name']; ?></p>
							<a href="movies.php?page=<?php echo $rows['name'];?>" class="btn btn-xs btn-primary" role="button" title="Voir les lieux cultes associés">Voir lieux cultes associés</a>
						</div>
					</div>
				</div>
					
				<div class="hidden-xs col-md-3 text-center">	
					<div class="thumbnail film-movies"> 
						<?php
						$rows = $req->fetch();
						?>
						<!-- place picture -->
						<img class="image-film-movies img-responsive" src="<?php echo $rows['backdrop_path'] ?>" alt="Photo du lieu"/>
						<div class="caption desc-image-film-movies">
							<p class="nom-film-movies"><?php echo $rows['name']; ?></p>
							<a href="movies.php?page=<?php echo $rows['name'];?>" class="btn btn-xs btn-primary" role="button" title="Voir les lieux cultes associés">Voir lieux cultes associés</a>
						</div>
					</div>
				</div>
					
				<div class="hidden-xs col-md-3 text-center">	
					<div class="thumbnail film-movies"> 
						<?php
						$rows = $req->fetch();
						?>
						<!-- place picture -->
						<img class="image-film-movies img-responsive" src="<?php echo $rows['backdrop_path'] ?>" alt="Photo du lieu"/>
						<div class="caption desc-image-film-movies">
							<p class="nom-film-movies"><?php echo $rows['name']; ?></p>
							<a href="movies.php?page=<?php echo $rows['name'];?>" class="btn btn-xs btn-primary" role="button" title="Voir lieux cultes associés">Voir lieux cultes associés</a>
						</div>
					</div>
				</div>
			</div>
			
			<?php
			} else if (($_GET['page'] == "A") || ($_GET['page'] == "B") || ($_GET['page'] == "C") || ($_GET['page'] == "D") || ($_GET['page'] == "E") || ($_GET['page'] == "F") || ($_GET['page'] == "G") || ($_GET['page'] == "H") || ($_GET['page'] == "I") || ($_GET['page'] == "J") || ($_GET['page'] == "K") || ($_GET['page'] == "L") || ($_GET['page'] == "M") || ($_GET['page'] == "N") || ($_GET['page'] == "O") || ($_GET['page'] == "P") || ($_GET['page'] == "Q") || ($_GET['page'] == "R") || ($_GET['page'] == "S") || ($_GET['page'] == "T") || ($_GET['page'] == "U") || ($_GET['page'] == "V") || ($_GET['page'] == "W") || ($_GET['page'] == "X") || ($_GET['page'] == "Y")|| ($_GET['page'] == "Z")){
				$lettre = $_GET['page'];
				// création de la requête
				$sql = "SELECT name, backdrop_path FROM movie WHERE name LIKE '$lettre%' ORDER BY name";  
				// lancement de la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
				$req = $connection->query($sql); 
				$res = $req->fetchAll();
				echo "<div class='row'>";
				foreach($res as $value) {
			?>	
					<div class="col-xs-6 col-md-3 text-center">	
						<div class="thumbnail film-movies"> 
							<!-- place picture -->
							<img class="image-film-movies img-responsive" src="<?php echo $value[1]; ?>" alt="Photo du lieu"/>
							<div class="caption desc-image-film-movies">
								<p class="nom-film-movies"><?php echo $value[0]; ?></p>
								<a href="movies.php?page=<?php echo $value[0];?>" class="btn btn-xs btn-primary" role="button" title="Voir les lieux cultes associés">Voir lieux cultes associés</a>
							</div>
						</div>
					</div>
					<?php
				}
				echo "</div>";
				/* ++++++++++++++++++++++++++++++++++++++
				USER CHOOSES TO SEE A MOVIE FAMOUS PLACES 
				++++++++++++++++++++++++++++++++++++++ */
			} else {
				$film = $_GET['page'];
				// resquest
		        $sql = "SELECT place.name, place.photo_path, movie.description, movie.backdrop_path, movie.id FROM place, movie, placemovie WHERE movie.name = '$film' AND movie.id = placemovie.movie_id AND placemovie.place_id = place.id";
				$req = $connection->query($sql); 
				$res = $req->fetchAll();
				$id_movie = $res[0][4];
				?>

				<div class="favmovie row">
					<h2 class='nom-lieu-h2-movies'><?php echo $film;?></h2>
					<?php 
					if ($connect == true) {
						$user_id = $_SESSION['id'];
						$sql = "SELECT * FROM usersfavorite_movies WHERE movie_id = '$id_movie' AND user_id = '$user_id'";
						$req = $connection -> query($sql);
						$int = $req->rowCount();
						if ($int == 0) {
					?>
						<button type="button" id="add_fav" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true" title="Ajouter le film à mes favoris"></span></button>
					<?php
						} else {
					?>
						<button type="button" id="add_fav" class="btn btn-lg btn-default button-fav-pink"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true" title="Ajouter le film à mes favoris"></span></button>
					<?php
						}
					} else {
					?>
						<button type="button" id="add-fav" onclick='openNav()' class="btn btn-lg btn-default"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true" title="Ajouter le film à mes favoris"></span></button>
					<?php
					}
					?>
				</div>

				<div class="places row">   
				    <?php
						foreach($res as $value) {
						?>	
					<div class='places_slideshow col-sm-6 col-md-4'>
				      <div class="thumbnail">
				        <img class="image-lieu-movies img-responsive img-rounded" src="<?php echo $value[1]; ?>" alt="Photo du lieu"/>
				       <div class="caption">
				          <p class="nom-lieu-movies"><?php echo $value[0]; ?></p>
						<a href="place.php?place=<?php echo $value[0];?>" class="btn btn-xs btn-info" role="button" title="Voir le lieu culte">En savoir plus</a>
				          <!--<div class='rating'>
				            <span class='fa fa-star'></span>
				            <span class='fa fa-star'></span>
				            <span class='fa fa-star'></span>
				            <span class='fa fa-star'></span>
				            <span class='fa fa-star'></span>
				          </div>-->
				        </div>
				      </div>
					</div>
				<?php
				}
				?>
				</div>
				<!-- presentation of the movie and its famous places -->
				<div class='movie_div row'>
					<?php 
					$movieid = $res[0]['id'];
					$request = "SELECT type.type FROM type, movietype WHERE '$movieid' = movietype.movie_id AND movietype.type_id = type.id";
						$req = $connection->query($request); 
						$result = $req->fetchAll(); 
						// sql request to get the movie types ?>

					<!-- movie poster and resume -->
					<div class="col-sm-6 hidden-xs hidden-sm col-md-7 movie_infos">
						<img src="<?php echo $res[0]['backdrop_path']; ?>" class="img-responsive movie_poster"/>

						<h4>Synopsis:</h4>
						<p><?php echo $res[0]['description']; ?></p>

						<h4>Genres:</h4><!-- movie type -->
						<ul><?php foreach ($result as $key => $value) {?>
							<li class="typeItem"><?php echo $value['type'];?></li>
							<?php
						};?></ul>

						<?php 
						$fav_request = "SELECT COUNT(*) FROM usersfavorite_movies WHERE '$movieid' = usersfavorite_movies.movie_id";
						$req = $connection->query($fav_request); 
						$count = $req->fetch(); 
						// sql request to get the movie likes by users ?>
						<p><?php echo $count[0];?> utilisateurs ont ajouté ce film à leurs favoris</p>

						<h4>Partager cette page avec un ami:</h4>
						<ul class="share_movie">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo getCurrentURL();?>" target="_blank"><li><img src="image/share_facebook.png" alt="Partager cette page sur Facebook" /></li></a>
							<a href="https://twitter.com/home?status=<?php echo getCurrentURL();?>" target="_blank"><li><img src="image/share_twitter.png" alt="Partager cette page sur Twitter" /></li></a>
							<a href="https://plus.google.com/share?url=<?php echo getCurrentURL(); ?>" target="_blank"><li><img src="image/share_googleplus.png" alt="Partager cette page sur Google+" /></li></a>
						</ul>
					</div>
					<div class="col-sm-12 col-md-5">
					<h4>Liste des lieux cultes : </h4>
						<?php foreach ($res as $key => $value) {?>
							<p class="place"><a href="place.php?place=<?php echo $value[0];?>"><?php echo $value[0];?></a></p>
							<?php
						};?>
					</div>
				</div>
			<?php
			}
			include ('footer.php');

			function getCurrentURL(){
			    $currentURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
			    $currentURL .= $_SERVER["SERVER_NAME"];
			 
			    if($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443")
			    {
			        $currentURL .= ":".$_SERVER["SERVER_PORT"];
			    } 
			 
			        $currentURL .= $_SERVER["REQUEST_URI"];
			    return $currentURL;
			}
				?>
			
		</div>
		<script> 	
			$( "#add_fav" ).click(function() {
				var lieu = <?= $id_movie ?>;
				var proposition = "film";
				if ($(this).css("background") == "rgb(255, 192, 203) none repeat scroll 0% 0% / auto padding-box border-box") {
					supprfavoris(lieu, proposition);
				} else {
					ajoutfavoris(lieu, proposition);
				}
			});
		</script>
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script src="js/button-fav.js"></script>
	</body>
</html>