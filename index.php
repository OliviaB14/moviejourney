<!DOCTYPE html>
<html lang="fr"><!-- language -->

	<head>
		<!-- META TAGS -->
		<!-- encoding --><meta charset="utf-8"/>
		<!-- mobile friendly tag --><meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" /><!-- bootstrap -->
		<link rel="stylesheet" href="style.css" type="text/css" /><!-- main stylesheet -->
		<title>Movie Journey</title>
	</head>

	<body>
		<header>
			<nav class="navbar navbar-default">
				<div class="container-fluid"> 
					<!-- Brand and toggle get grouped for better mobile display -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar">Accueil</span>
						<span class="icon-bar">Lieux cultes</span>
						<span class="icon-bar">Mes circuits</span>
						<span class="icon-bar">A propos</span>
						<span class="icon-bar">Contact</span>
					</button>
					<div class="navbar-header"> <a class="navbar-brand" href="#">MOVIE JOURNEY</a> </div>
					<!-- end navbar header
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
							<li class="active"><a href="#">Accueil</a></li>
							<li><a href="#">Lieux cultes</a></li>
							<li><a href="#">Mes circuits</a></li>
							<li><a href="#">A propos</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
						<ul class="nav nav-stacked navbar-right">
							<li><a href="#"><img src="image/logout.png" alt="">déconnexion</a></li>
							<li><a href="#"><img src="image/reglage.png" alt="">réglages</a></li>
						</ul>
					</div>
					<!-- end navbar-collapse --> 
				</div>
				<!-- end container-fluid --> 
			</nav>
		</header>

		<!-- MAIN CONTAINER : all page is contained -->
		<div class="container-fluid">

			<!-- CAROUSEL built with images of famous places, films... -->
			<div class="row">
				<div id="carousel-example-generic" class="carousel slide col-lg-12" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="image/Petra.png" alt="...">
				      <div class="carousel-caption">
				        <img class="descriptioncaroussel" src="image/fonddescriptionimg.png" alt="">
						<form class="navbar-form text-center" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
				      </div>
				    </div>
				    <div class="item">
				      <img src="image/Bali.jpg" alt="...">
				      <div class="carousel-caption">
				        Bali
				      </div>
				    </div>
				        <div class="item">
				      <img src="image/Montagne.jpg" alt="...">
				      <div class="carousel-caption">
				        Montagne
				      </div>
				    </div>
				  </div>

				  <!-- Controls -->
				  <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>-->
				</div>
			</div>
			<!-- END OF CAROUSEL -->

			<!-- image 242x200 -->
			<!-- WEBSITE DESCRIPTION -->
			<div class="row" id="description">
				<div class="col-xs-6 col-md-3 text-center">
					<div class="thumbnail desc"> <img src="image/route.png" alt="..."> 
						<!-- glyphicon glyphicon-road -->
						<div class="caption">
							<h4>Création de l'itinéraire</h4>
							<p>blablablablablablabla blablablablablablablabla blablablablablablablabla blablablablablablablabla</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 text-center">
					<div class="thumbnail desc"> <img src="image/airplane.png" alt="..."> 
						<!-- glyphicon glyphicon-plane -->
						<div class="caption">
							<h4>Réservation des billets d'avion</h4>
							<p>blablablablablablabla blablablablablablablabla blablablablablablablabla blablablablablablablabla</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 text-center">
					<div class="thumbnail"> <img src="image/hostel.png" alt="..."> 
						<!-- image/home.png -->
						<div class="caption">
							<h4>Réservation des hôtels</h4>
							<p>blablablablablablabla blablablablablablablabla blablablablablablablabla blablablablablablablabla</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 text-center" >
					<div class="thumbnail"> <img src="image/restaurants.png" alt="..."> 
						<!-- glyphicon glyphicon-cutlery -->
						<div class="caption">
							<h4>Proposition de restaurants</h4>
							<p>blablablablablablabla blablablablablablablabla blablablablablablablabla blablablablablablablabla</p>
						</div>
					</div>
				</div>
			</div>
			<!-- END OF DESCRIPTION -->

			<!-- SELECTED ITENERARIES -->
			<div id="itinerary" class="row"> 
				<!-- image 171x180 -->
				<h3 class="text-center"><span class="label label-default">La sélection de l'équipe</span> </h3>
				<div class="row">
					<div class="col-xs-6 col-md-3">
					</div>
					<div class="col-xs-6 col-md-2 text-center"> <img src="..." alt="...">
						<p>Circuit 1</p>
						<a href="#" class="thumbnail">
						<p>En savoir plus</p>
						</a> 
					</div>
					<div class="col-xs-6 col-md-2">
					</div>
					<div class="col-xs-6 col-md-2 text-center"> <img src="..." alt="...">
						<p>Circuit 2</p>
						<a href="#" class="thumbnail">
						<p>En savoir plus</p>
						</a> 
					</div>
					<div class="col-xs-6 col-md-3">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3">
					</div>
					<div class="col-xs-6 col-md-2 text-center"> <img src="..." alt="...">
						<p>Circuit 3</p>
						<a href="#" class="thumbnail">
						<p>En savoir plus</p>
						</a> 
					</div>
					<div class="col-xs-6 col-md-2">
					</div>
					<div class="col-xs-6 col-md-2 text-center"> <img src="..." alt="...">
						<p>Circuit 4</p>
						<a href="#" class="thumbnail">
						<p>En savoir plus</p>
						</a> 
					</div>
					<div class="col-xs-6 col-md-3">
					</div>
				</div>
			</div>
			<!-- END OF SELECTED ITENERARIES -->
		</div>

		

		
<!-- !!!!!!!!!!  faire un include footer.php à la place !!!!!!!!!! -->

		<div class="container-fluid">
		<footer>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<h4>Navigation</h4>
					<ul class="nav navbar-nav">
						<li><a href="#">Accueil</a></li>
						<li><a href="#">Lieux cultes</a></li>
						<li><a href="#">Mes circuits</a></li>
						<li><a href="#">A propos</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-xs-12">
					<h4>Infos pratiques</h4>
				</div>
				<div class="social-inner col-lg-4 col-md-6">
					<h4>Suivez Movie Journey</h4>
					<ul class="social">
						<li><a href="#">Image Facebook</a></li>
						<li><a href="#">Image Twitter</a></li>
						<li><a href="#">Image Instagram</a></li>
					</ul>
				</div>
			</div>

			<!-- copyright info -->
			<div class="row">
				<div class="copyright col-lg-12">
					<p>Copyright © 2017 - Site réalisé par Sophie, Maud, Olivia, Hishem & Thomas</p>
				</div>
			</div>
		</footer>
		</div>

		<!-- SCRIPT FILES -->
		<!-- jquery script --><script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<!-- bootstrap file --> <script src="js/bootstrap.min.js"></script>
	</body>
</html>