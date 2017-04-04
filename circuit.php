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
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/circuit.css" rel="stylesheet" type="text/css">
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

	<div id="favorite">
		<span id="test"></span>
		<?php 
			$user_id = $_SESSION['id'];
			$sql = "SELECT place.name, place.latitude, place.longitude FROM usersfavorite_places, place WHERE usersfavorite_places.user_id = '$user_id' AND usersfavorite_places.place_id = place.id ORDER BY place.name";
			$req = $connection->query($sql);
			$res = $req->fetchAll();
			foreach($res as $value) {
		?>
				<h4 class="test" onclick="itineraire(<?php echo '\''.$value[0].'\','.$value[1].','.$value[2] ?>)"><?php echo $value[0] ?></h4>
		<?php
			}
		?>
	</div>

	<div id='gmap_canvas'></div>

<?php
include ('footer.php');
?>

</div>
</body>	

<script>
	google.maps.event.addDomListener(window, 'load', init_map);	
</script>

</html>



