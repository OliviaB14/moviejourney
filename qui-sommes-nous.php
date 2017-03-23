<?php
	require ('base.php');
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8"><!-- encoding -->
		<meta name="description" content="Marchez sur les pas de vos acteurs préférés et visitez les lieux cultes de vos films préférés." /><!-- page description -->

		<title>Qui sommes-nous ? - Movie Journey</title> <!-- page title -->

		<!-- stylesheets files -->
		<link href="css/style.css" rel="stylesheet" type="text/css"><!-- general stylesheet -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css"><!-- bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/qui-sommes-nous.css">

		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">		
		<!--font-family title -->
	</head>

	<body>
		<?php
			include ('header.php');
		?>
		<div class="jumbotron">
			<div class="container">
				<h1>Qui sommes-nous ?</h1>
			</div>
		</div>

		<div class="container-fluid text-justify">
			<div class="col-lg-8 col-lg-offset-2 col-xs-12">
				<h4>Movie Journey : plus qu'un voyage, toute une culture ... </h4>
				<p>Envie d'une expérience inédite ? Movie Journey est là pour vous faire vivre un voyage unique ! Selectionner vos films favoris, réservé l'hôtel de votre choix et le vol qui vous convient ! Movie Journey se charge du reste, vous n'avez qu'à suivre l'itinéraire proposer et dîner dans notre large liste de restaurant.  </p>

				<h4>Un voyage origninal mais de qualité</h4>
				<p>Parce que Movie Journey ne recule pas devant la qualités de ses services, nous vous proposons des services testés, approuvés et classés parmis les meilleurs. Restaurants, itinéraire et hôtels sont tous selectionnés dans le guide Trip Advisor. Afin de vous accompagner tout au long de votre expérience, Movie Journey dispose d'une assistance clientèle ouverte 7j/7 24h/24. <p>

				<h4>Participez au plan Happy Journey ! </h4>
				<p>Movie Journey a mis en place la plan Happy Journey ! Le but est simple : partagez autant que possible tout ses merveilleux souvenirs avec #HappyJourney sur tous les réseaux sociaux. </p>

				<div class="reservation">
					Réserver mon voyage <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
				</div>
			</div>
		</div>

		<?php
			include ('footer.php');
		?>

		<!-- SCRIPT FILES --> 
		<!-- jquery script --><script type="text/javascript" src="js/jquery-3.1.1.js"></script> 
		<!-- bootstrap file --> <script src="js/bootstrap.min.js"></script>
		<!-- back to top button script --> <script type="text/javascript" src="js/backtotop.js"></script>
	</body>
</html>