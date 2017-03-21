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
				<h4>Movie Journey, des voyages qui vous ressemblent ...</h4>
				<p>Depuis 2017, Movie Journey et son équipe vous accompagne pour vous aider à faire votre choix parmi plus de 50 destinations circuits, plus d’une quarantaine de choix au sein de notre large sélection d’hôtels à travers le monde. Toutes les offres sont à retrouver sur notre site de voyage moviejourney.com.</p>

				<h4>Soyez sûr de trouver le voyage qui vous ressemble</h4>
				<p>Pour vous garantir une qualité où que vous soyez, Movie Journey vous propose une offre variée de clubs et de séjours. Afin de vous accompagner dans votre choix de vacances, Jet tours vous propose une large sélection d’hôtels ayant reçu le certificat d’excellence Tripadvisor. Pendant votre séjour vous pourrez bénéficier d’une assistance 7j/7 et 24h/24.<p>

				<h4>Se souvenir et repartir avec Movie Journey</h4>
				<p>Partagez vos souvenirs avec tous vos proches avec notre partenaire Instagram. Réservez votre voyage Movie Journey dans l’une de nos 400 agences partout en France, par téléphone ou gratuitement en ligne sur le site de voyage moviejourney.com !</p>

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