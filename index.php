<!DOCTYPE html>
<html lang="fr">
<!-- language -->
<head>
<!-- META TAGS -->
<!-- encoding -->
<meta charset="utf-8"/>
<!-- mobile friendly tag -->
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<!-- STYLESHEETS -->
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<!-- bootstrap -->
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
<!-- font awesome -->
<link rel="stylesheet" href="style.css" type="text/css" />
<!-- main stylesheet -->
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
				<h1 class="overlay-h1">Hishem trouve nous un titre</h1>
				<h2 class="overlay-h2">Marchez sur les pas de vos acteurs préférés</h2>
			</div>
			<!-- end of overlay --> 
			
			<!-- search bar -->
			<div id="searchbarDiv" class="row">
				<form class="form-inline">
					<div class="dropdown col-lg-2 col-md-2" id="styled-select">
					  <select>
					  	<option>Recherche<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></option>
						<option>Film</option>
						<option>Thème de film</option>
						<option>Lieux cultes</option>
					  </select>
					</div>
					<div class="form-group col-lg-8 col-md-10">
						<label for="s" class="sr-only">Recherche</label>
						<input type="search" class="form-control" id="searchbar" placeholder="Rechercher un film, un lieu, un thème..."/>
					</div>
					<button type="submit" class="btn btn-default col-lg-2 col-md-hidden">Rechercher 	<img src="image/loupe.png" alt="Rechercher"/></button>
				</form>
			</div>
			<!-- end of search bar --> 
		</div>
		<!-- end of inner-container-carousel -->
		
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active"> <img src="image/petra2.jpg" alt="...">
				<div class="carousel-caption">
					<p>Petra - Indiana Jones</p>
				</div>
			</div>
			<div class="item"> <img src="image/Bali.jpg" alt="..."/>
				<div class="carousel-caption">
					<p>Bali</p>
				</div>
			</div>
			<div class="item"> <img src="image/Montagne.jpg" alt="..."/>
				<div class="carousel-caption">
					<p>Montagne</p>
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
	</div>
	<!-- END OF CAROUSEL --> 
	
	<!-- image 242x200 --> 
	<!-- WEBSITE DESCRIPTION -->
	<div class="row" id="description">
		<div class="col-xs-6 col-md-3 text-center">
			<div class="thumbnail desc"> <img src="image/route.png" alt="..."/>
				<div class="caption">
					<h4>Création de l'itinéraire</h4>
					<p>Movie Journey vous propose des itinéraires en fonction du lieu que vous souhaitez visiter.</p>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3 text-center">
			<div class="thumbnail desc"> <img src="image/airplane.png" alt="..."/>
				<div class="caption">
					<h4>Réservation des billets d'avion</h4>
					<p>Vous pouvez réserver votre billet d'avion directement sur le site grâce à nos partenaires.</p>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3 text-center">
			<div class="thumbnail"> <img src="image/hostel.png" alt="..."/>
				<div class="caption">
					<h4>Réservation des hôtels</h4>
					<p>Nous vous proposons aussi de réserver directement l'hôtel le plus proche du lieu que vous souhaitez visiter.</p>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3 text-center" >
			<div class="thumbnail"> <img src="image/restaurants.png" alt="..."/>
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
		<h3 class="text-center"><span class="label label-default">La sélection de l'équipe</span> </h3>
		<div class="row">
			<div class="col-xs-6 col-md-3"> </div>
			<div class="col-xs-6 col-md-2 text-center"> <img src="..." alt="..."/>
				<p>Circuit 1</p>
				<a href="#" class="thumbnail">
				<p>En savoir plus</p>
				</a> </div>
			<div class="col-xs-6 col-md-2"> </div>
			<div class="col-xs-6 col-md-2 text-center"> <img src="..." alt="..."/>
				<p>Circuit 2</p>
				<a href="#" class="thumbnail">
				<p>En savoir plus</p>
				</a> </div>
			<div class="col-xs-6 col-md-3"> </div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-md-3"> </div>
			<div class="col-xs-6 col-md-2 text-center"> <img src="..." alt="...">
				<p>Circuit 3</p>
				<a href="#" class="thumbnail">
				<p>En savoir plus</p>
				</a> </div>
			<div class="col-xs-6 col-md-2"> </div>
			<div class="col-xs-6 col-md-2 text-center"> <img src="..." alt="...">
				<p>Circuit 4</p>
				<a href="#" class="thumbnail">
				<p>En savoir plus</p>
				</a> </div>
			<div class="col-xs-6 col-md-3"> </div>
		</div>
	</div>
	<!-- END OF SELECTED ITENERARIES --> 
	
	<!-- FOOTER -->
	<?php
				include('footer.php')
			?>
	<!-- END OF FOOTER --> 
	
	<!-- END OF THE MAIN CONTAINER --> 
</div>

<!-- SCRIPT FILES --> 
<!-- jquery script --><script type="text/javascript" src="js/jquery-3.1.1.js"></script> 
<!-- bootstrap file --> <script src="js/bootstrap.min.js"></script>
</body>
</html>
