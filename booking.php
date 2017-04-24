<?php
	// Connect to the database
	require 'base.php';

	// Character encoding of the database
	$connection->exec("SET NAMES 'utf8'");
?>

<!DOCTYPE html>
<html lang="fr"><!-- language -->
	<head>
		<!-- META TAGS -->
		<!-- encoding -->
		<meta charset="utf-8"/>
		<!-- mobile friendly tag -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<!-- main stylesheet -->
		<link rel="stylesheet" href="css/booking.css" type="text/css" />
		<link rel="stylesheet" href="css/account.css" type="text/css" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker3.standalone.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
		<!-- google fonts -->

		<title>Réserver mon séjour - Movie Journey</title>
		<link rel="icon" type="image/png" href="image/favicon.png" />
	</head>

	<body>
		<!-- header -->
		<?php include('header.php'); ?>

		<!-- MAIN CONTAINER : all page is contained -->
		<div class="container-fluid">
			 <!-- Nav tabs -->
			 <div id="container-menu-reservation" class="row">
				  <ul class="nav nav-tabs menu-reservation" role="tablist">
					<li id="li-transport" class="active" role="presentation"></li>
					<li id="li-paiement" role="presentation"></li>
					<li id="li-validation" role="presentation"></li>
				  </ul>
		  	</div>
		
		  <!-- Tab panes -->
		    <div class="row">
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="transport">
					<h5>Veuillez choisir votre mode de transport</h5>
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option2" autocomplete="off">Avion
					  </label>
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option3" autocomplete="off">Train
					  </label>
					</div>
					<main>
					  <div class="input-daterange input-group" id="flight-datepicker">
						<div class="form-item">
						  <label>Date - Départ</label><span class="fontawesome-calendar"></span>
						  <input class="input-sm form-control" type="text" id="start-date" name="start" data-date-format="DD, MM d"/><span class="date-text date-depart"></span>
						</div>
						<div class="form-item">
						  <label>Date - Arrivé</label><span class="fontawesome-calendar"></span>
						  <input class="input-sm form-control" type="text" id="end-date" name="end" data-date-format="DD, MM d"/><span class="date-text date-return"></span>
						</div>
					  </div>
					</main>
					<nav aria-label="...">
					  <ul class="pager">
						<li class="next"><a href="#paiement" aria-controls="paiement" role="tab" data-toggle="tab" >Suivant<span aria-hidden="true">&rarr;</span></a></li>
					  </ul>
					</nav>
				</div>
				<div role="tabpanel" class="tab-pane" id="paiement">
					<h5>Paiement</h5>
					<nav aria-label="...">
						<ul class="pager">
							<li class="previous"><a href="#transport" aria-controls="transport" role="tab" data-toggle="tab"><span aria-hidden="true">&larr;</span>Retour</a></li>
							<li class="next"><a href="#validation" aria-controls="validation" role="tab" data-toggle="tab">Suivant<span aria-hidden="true">&rarr;</span></a></li>
						</ul>
					</nav>
				</div>
				<div role="tabpanel" class="tab-pane" id="validation">
					<h5>Réservation effectué</h5>
					<h5>Vous recevrez confirmation de votre transaction par email</h5>
					<nav aria-label="...">
						<ul class="pager">
							<li class="previous"><a href="#paiement" aria-controls="paiement" role="tab" data-toggle="tab"><span aria-hidden="true">&larr;</span>Retour</a></li>
						</ul>
					</nav>
				</div>
			  </div>
		    </div>
			
		</div>

		<!-- footer -->
		<?php include('footer.php'); ?>

		<!-- script files -->
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/booking.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>