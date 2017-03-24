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
<title>Lieux cultes</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/breadcrumb.css" rel="stylesheet" type="text/css">
<link href="css/place.css" rel="stylesheet" type="text/css">
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCMGeFAtGWlSG2me_ccsocwSU1fNzcXv8g'></script>
<!-- clé API google map Javascript API :  AIzaSyCMGeFAtGWlSG2me_ccsocwSU1fNzcXv8g -->
</head>

<body>
<?php
	include('header.php');
?>

<!-- MAIN CONTAINER : all page is contained -->
<div class="container-fluid">
	<ol class="breadcrumb">
		<?php 
			$place = $_GET['place'];
			echo '<li><a href="movies.php" title="Films">Films</a></li>';
			$sql = "SELECT movie.name FROM movie, place, placemovie WHERE place.name = '$place' AND place.id = placemovie.place_id AND placemovie.movie_id = movie.id";
			$req = $connection->query($sql);
			$res = $req->fetch();
		?>
			<li><a href='movies.php?page=<?php echo $res[0] ?>'><?php echo $res[0] ?></a></li>
	    	<li class="active"><?php echo $_GET["place"]?></li>
	</ol>
	
	<?php 
	
		// création de la requête
		//rajouter townplace FROM et townplace à la place de town dans WHER
        $sql = "SELECT place.name, place.photo_path, place.description, place.latitude, place.longitude, town.country, town.name FROM place, movie, placemovie, town, placetown WHERE place.name = '$place' AND movie.id = placemovie.movie_id AND placemovie.place_id = place.id AND place.id = placetown.place_id AND placetown.town_id = town.id";
		// lancement de la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
		$req = $connection->query($sql); 
		$res = $req->fetch();
		// variable utilisé pour prochaine requête
		$nom = $res[0];
		$lat = $res[3];
		$long = $res[4];
	?>
		<div class="row">
			<div class="description-place">
				<div class="image-place col-md-9">
					<img class="image-place-place img-responsive" src="<?php echo $res[1] ?>" alt="Photo du lieu"/>
				</div>
				<div class="text-place col-md-3">
					<div class="inner-text-place">
						<h3><?php echo $res[0] ?></h3>
						<p><?php echo $res[2] ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="add-fav">
			<div class="row">
				<div class="col-md-12">
					<h4>Ce lieu vous plaît ? Vous désirez le visiter ?</h4>
					<h4>Ajoutez-le à vos favoris et organisez votre voyage !</h4>
					<button type="button" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true" title="Ajouter le film à mes favoris"></span></button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="pays-ville-place col-md-3">
				<div class="inner-pays-ville-place">
					<h3><?php echo $res[5] ?></h3>
					<p><?php echo $res[6] ?></p>
				</div>
			</div>
			<div class="localisation-place col-md-9">
				<div id='gmap_canvas'></div>
			</div>
		</div>
		<div class="row">
			<?php
				
				$sql="SELECT name, photo_path, (3956 * 2 * ASIN(SQRT( POWER(SIN(( $lat - latitude) *  pi()/180 / 2), 2) +COS( $lat * pi()/180) * COS(latitude * pi()/180) * POWER(SIN(( $long - longitude) * pi()/180 / 2), 2) ))) AS distance FROM place HAVING distance <= 10 ORDER BY distance";
        		$stmt =$connection->prepare($sql);
        		$stmt->execute();
				$int = $stmt->rowCount();
				// 1 car la requête comprend le lieu en lui même
				if ($int == 1) {
					echo "<h3>Aucun autre lieu à proximité...</h3>";
				} else {
					echo "<h3>D'autres lieux à proximité...</h3>";
					while($row = $stmt->fetch()){
						if ($row[0] != $nom) {
							?>
							  <div class="col-xs-6 col-md-3">
								<a href="#" class="thumbnail">
								  <img src="<?php echo $row[1] ?>" alt="...">
								</a>
							  </div>
							<?php
						}
					}
				}
				?>
		</div>
		
		<?php
	include ('footer.php');
		?>
	
</div>
</body>	
<script type='text/javascript'>
	var lat = <?= $res[3]; ?>;
	var long = <?= $res[4]; ?>;
	var nom = '<?= $place; ?>';
	function init_map(){var myOptions = {zoom:19,center:new google.maps.LatLng(lat,long),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(lat,long)});infowindow = new google.maps.InfoWindow({content:nom});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>
</html>


