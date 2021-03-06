<?php
  // Connect to the database
  require 'base.php';
  
  // Character encoding of the database
  $connection->exec("SET NAMES 'utf8'");
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mes circuits</title>

		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/circuit.css" rel="stylesheet" type="text/css">

		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">	
		<!--google fonts -->

		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="js/gmaps.js"></script>
		<script src="js/circuit.js"></script>
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCMGeFAtGWlSG2me_ccsocwSU1fNzcXv8g'></script>
		<!-- clé API google map Javascript API :  AIzaSyCMGeFAtGWlSG2me_ccsocwSU1fNzcXv8g -->
		<!-- clé API google map Distance Matrix API : AIzaSyA88fZiFkYPHVWDkKaco_2wTyFAV1Lagf0 -->
	</head>

<body>
<?php
	include('header.php');
?>

<!-- MAIN CONTAINER : all page is contained -->
<div class="container-fluid">

	<div class="informations row">
		<h3 class="text-center line-title lead"><span>Organisez votre voyage</span></h3>
		<div class="row">
			<p class="col-lg-6 col-lg-offset-3">Retrouvez ici tous vos lieux favoris.</p>
			<p class="col-lg-6 col-lg-offset-3">Pour créer votre circuit personnalisé, cliquez sur les lieux que vous voulez visiter, étape par étape.</p>
		</div>
		<div class="marker row">
			<ul class="col-md-8 col-md-offset-2">
				<li><img class="imgmarker" alt="" src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png">Votre position</li>
				<li><img class="imgmarker" alt="" src="http://maps.google.com/mapfiles/ms/icons/red-dot.png">Vos différentes étapes</li>
				<li><img class="imgmarker" alt="" src="http://maps.google.com/mapfiles/ms/icons/green-dot.png">Lieux à proximité</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div id="favorite" class="col-md-4">
		<?php 
			if(!empty($_SESSION['id'])){
				// if user is connected <=> the session is created
				$user_id = $_SESSION['id'];
				$sql = "SELECT place.name, place.latitude, place.longitude FROM usersfavorite_places, place WHERE usersfavorite_places.user_id = '$user_id' AND usersfavorite_places.place_id = place.id ORDER BY place.name";
				$req = $connection->query($sql);
				$int = $req->rowCount();
				$res = $req->fetchAll();
				if ($int > 0) {
					// if user has at least one favorite place in its favorites
		?>
					<h3>Vos favoris</h3>
					<?php foreach($res as $value) { ?>
						<h4 class="place" onclick="itineraire(<?php echo '\''.$value[0].'\','.$value[1].','.$value[2] ?>)"><?php echo $value[0] ?></h4>
					<?php }
	 			} else {
	 				// if user hasn't put places in its favorites ?>
					<h4>Vous devez d'abord ajouter des lieux à vos favoris avant de pouvoir créer votre itinéraire</h4>
				<?php }
			} else {
				// if user isn't connected <=> session isn't created
			?>
				<p><a href="#connectionpanel"><button type="button" class="btn btn-default navbar-btn" onclick="openNav()"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Se connecter</button></a></p>
				<p><a href="create-account.php"><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Créer un compte</button></a></p>
			<?php 
			}
			?>
		</div>
		<div id="step" class="col-md-8">
		
		</div>
	</div>
	
	<div id="save-trip">
	
	</div>
	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10" id='gmap_canvas'></div>
	</div>
	

<?php
include ('footer.php');
?>

</div>
</body>	

<script>
	google.maps.event.addDomListener(window, 'load', init_map);	
</script>

</html>



