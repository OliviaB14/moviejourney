<?php
  // Connect to the database and to the session
  require 'base.php';

  // Character encoding of the database
  $connection->exec("SET NAMES 'utf8'");
?>
<!DOCTYPE html>
<html>
	<head>

		<!-- META TAGS -->
		<meta charset="utf-8"/><!-- encoding -->
		<meta name="description" content="Marchez sur les pas de vos acteurs préférés et visitez les lieux cultes de vos films préférés." /><!-- page description -->

		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<!-- main stylesheet -->
		<link rel="stylesheet" type="text/css" href="HoverEffectIdeas/HoverEffectIdeas/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="HoverEffectIdeas/HoverEffectIdeas/css/set1.css">

		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">	
		<!--font-family title -->

		<title>Movie Journey</title>
	</head>

	<body>
		<?php
			include('header.php')
		?>

		<!-- MAIN CONTAINER : all page is contained -->
		<div class="container-fluid">

		<!-- CAROUSEL built with images of famous places, films... -->
		<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
				
				<div class="inner-container-carousel">
					<!-- overlay -->
					<div class="overlay">
						<h1 class="overlay-h1" id="title">Partez à l'aventure avec Movie Journey</h1>
						<h2 class="overlay-h2" id="subtitle">Marchez sur les pas de vos acteurs préférés</h2>
					</div>
					<!-- end of overlay --> 
					
					<!-- search bar -->
					<div class="searchbarDiv row">
						<form class="form-inline" method="GET" action="search.php" id="searchinput">
							<div class="dropdown col-lg-2 col-md-2 styled-select">
							  <select name="opt">
								<option>Film<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></option>
								<option>Thème de film</option>
								<option>Lieux cultes</option>
							  </select>
							</div>
							<div class="form-group col-lg-8 col-md-10">
								<label for="search" class="sr-only">Recherche</label>
								<input type="search" class="form-control searchbar" name="search" placeholder="Rechercher un film, un lieu, un thème..."/>
							</div>
							<button type="submit" class="btn btn-default col-lg-2 col-md-hidden"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Rechercher</button>
						</form>
					</div>
					<!-- end of search bar --> 
				</div>
				<!-- end of inner-container-carousel -->
				
				<?php
					// création de la requête pour récupérer les informations nécessaire pour le carroussel
		            $sql = "SELECT place.name, place.photo_path, movie.name FROM place, movie, placemovie WHERE place.id = placemovie.place_id AND placemovie.movie_id = movie.id ORDER BY rand()";  

					// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
					$req = $connection->prepare($sql); 
					$req->execute();
				?>

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active"> 
						<?php $rows = $req->fetch(); ?>
						<!-- information  
						$rows[0] : place name
						$rows[1] : place's image path
						$rows[2] : movie name 
						-->
						<a href="place.php?place=<?php echo $rows[0]; ?>"><img class="img-carrousel-index" src="<?php echo $rows[1]; ?>" alt="Photo lieu carroussel 1"></a>
						<div class="carousel-caption">
							<p class="nom-lieu-carousel"><a href="place.php?place=<?php echo $rows[0]; ?>"><?php echo $rows[0]; ?></a></p>
							<p class="nom-film-carousel"><a href="movies.php?page=<?php echo $rows[2]; ?>"><?php echo $rows[2]; ?></a></p>
						</div>
					</div>
					<div class="item"> 
						<?php $rows = $req->fetch(); ?>
						<a href="place.php?place=<?php echo $rows[0]; ?>"><img class="img-carrousel-index" src="<?php echo $rows[1]; ?>" alt="Photo lieu carroussel 2"></a>
						<div class="carousel-caption">
							<p class="nom-lieu-carousel"><a href="place.php?place=<?php echo $rows[0]; ?>"><?php echo $rows[0]; ?></a></p>
							<p class="nom-film-carousel"><a href="movies.php?page=<?php echo $rows[2]; ?>"><?php echo $rows[2]; ?></a></p>
						</div>
					</div>
					<div class="item"> 
						<?php $rows = $req->fetch(); ?>
						<a href="place.php?place=<?php echo $rows[0]; ?>"><img class="img-carrousel-index" src="<?php echo $rows[1]; ?>" alt="Photo lieu carroussel 3"></a>
						<div class="carousel-caption">
							<p class="nom-lieu-carousel"><a href="place.php?place=<?php echo $rows[0]; ?>"><?php echo $rows[0]; ?></a></p>
							<p class="nom-film-carousel"><a href="movies.php?page=<?php echo $rows[2]; ?>"><?php echo $rows[2]; ?></a></p>
						</div>
					</div>
				</div>
				
				<!-- Controls --> 
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				<!-- end of controls -->
			</div>
			<!-- END OF CAROUSEL --> 
			

			<!-- WEBSITE DESCRIPTION -->
			<div class="row" id="description">
				<div class="col-xs-6 col-md-3 text-center">
					<div class="thumbnail desc"> <img src="image/route.png" alt="Circuits pré-sélectionnés"/>
						<div class="caption">
							<h4>Création de l'itinéraire</h4>
							<p>Movie Journey vous propose des itinéraires en fonction du lieu que vous souhaitez visiter.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 text-center">
					<div class="thumbnail desc"> <img src="image/airplane.png" alt="Réservation rapide et sécurisée"/>
						<div class="caption">
							<h4>Réservation des billets d'avion</h4>
							<p>Vous pouvez réserver votre billet d'avion directement sur le site grâce à nos partenaires.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 text-center">
					<div class="thumbnail"> <img src="image/hostel.png" alt="Réservation d'hôtels partenaires"/>
						<div class="caption">
							<h4>Réservation des hôtels</h4>
							<p>Nous vous proposons aussi de réserver directement l'hôtel le plus proche du lieu que vous souhaitez visiter.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 text-center" >
					<div class="thumbnail"> <img src="image/restaurants.png" alt="Une petite faim? Des restaurants vous sont également proposés !"/>
						<div class="caption">
							<h4>Proposition de restaurants</h4>
							<p>Movie Journey vous indique les restaurants les plus proches tout au long de votre circuit.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- END OF DESCRIPTION --> 
			
			<!-- ADVERTISEMENTS -->
			
			<!-- SELECTED ITENERARIES -->
			<div id="itinerary" class="row"> 
				<!-- image 171x180 -->
				<h3 class="text-center lead"><span>La sélection de l'équipe</span> </h3>
				<div class="row">
					<div class="col-xs-6 col-md-3 text-center thumbnail effect-lily">
						<div class="grid">
							<figure class="effect-lily">
								<img src="image/circuit-france.jpg" alt="img01"/>
								<figcaption>
									<h2>Allez à <span>Paris</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="selection.php?country=France">View more</a>
								</figcaption>			
							</figure>				
						</div>
					</div>
					<div class="col-xs-6 col-md-3 text-center thumbnail">
						<div class="grid">
							<figure class="effect-lily">
								<img src="image/circuit-england.jpg" alt="Circuit français"/>
								<figcaption>
									<h2>Visitez <span>l'Angleterre</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="selection.php?country=Angleterre">View more</a>
								</figcaption>			
							</figure>
						</div>
					</div>
					<div class="col-xs-6 col-md-3 text-center thumbnail">
						<div class="grid">
							<figure class="effect-lily">
								<img src="image/circuit-japan.jpg" alt="img01"/>
								<figcaption>
									<h2>Découvrez le <span>Japon</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="selection.php?country=Japan">View more</a>
								</figcaption>			
							</figure>
						</div>
					</div>
					<div class="col-xs-6 col-md-3 text-center thumbnail">
						<div class="grid">
							<figure class="effect-lily">
								<img src="image/index-reservation.jpg" alt="img01"/>
								<figcaption>
									<h2>Réservez votre circuit <span>Avec MovieJourney</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="circuit.php">View more</a>
								</figcaption>			
							</figure>
						</div>
					</div>
				</div>
			</div>
			<!-- END OF SELECTED ITENERARIES --> 


				<!-- FOOTER -->
			<?php
						include('footer.php');
					?>
			<!-- END OF FOOTER --> 
			
			<!-- END OF THE MAIN CONTAINER --> 
		</div>

		<!-- SCRIPT FILES --> 
		<!-- jquery script --><script type="text/javascript" src="js/jquery-3.1.1.js"></script> 
		<!-- bootstrap file --> <script src="js/bootstrap.min.js"></script>
		<!-- back to top button script --> <script type="text/javascript" src="js/backtotop.js"></script>
	</body>
</html>
