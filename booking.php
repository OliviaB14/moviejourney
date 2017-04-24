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
		<link rel="stylesheet" href="css/account.css" type="text/css" />
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
			<div class="row">
			</div>
		</div>

		<!-- footer -->
		<?php include('footer.php'); ?>

		<!-- script files -->
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>