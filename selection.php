<?php
  // Connect to the database
  require 'base.php';
  
  // Character encoding of the database
  $connection->exec("SET NAMES 'utf8'");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<!-- encoding -->
<title>Nos circuits - Movie Journey</title>
<!-- page title -->

<!-- STYLESHEETS -->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/selection.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="HoverEffectIdeas/HoverEffectIdeas/css/normalize.css"/>
<link rel="stylesheet" type="text/css" href="HoverEffectIdeas/HoverEffectIdeas/css/set1.css"/>



<!-- SCRIPTS FILES -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gmaps.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<?php
	include('header.php');
?>
	<div class="container-fluid">
<?php

	if(isset($_GET["country"])){
		// if user clicked on the circuits from index.php
		$pays = $_GET["country"];
		$SQL = "SELECT place.name, place.latitude, place.longitude, place.photo_path FROM place, placetown, town WHERE town.country='$pays' AND town.id = placetown.town_id AND placetown.place_id = place.id";
		$statement = $connection->prepare($SQL);
		$statement->execute();
		$nbre = $statement->rowCount();
		$result = $statement->fetchAll(); //$result[0][0:name;1:latitude;2:longitude]
		$int = 0;
?>

	<div class="row">
		<div class="col-md-12">
			<h2 id="pagetitle"><strong>
				<?php 
            	if(($pays =='Angleterre') || ($pays == 'France')){
            		echo "Partez à l'aventure en " . $pays; 
            	}else{
            		echo "Partez à l'aventure au " . $pays;
            	}?>
				</strong> </h2>
		</div>
		<section class="col-md-12">
			<div class="row" id="sideInfos">
				<div class="col-md-4 hotels-restaurants">
					<h3><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Nos bons plans</h3>
					<article data-spy="scroll" data-target="#scrollspy-nav" data-offset="0" class="scrollspy-example">
						<h4 id="hôtels">Hôtels</h4>
						<div class="media">
							<div class="media-left media-middle"> <img class="media-object" src="image/hostel.png" alt="..."> </div>
							<div class="media-body media-middle">
								<h5 class="media-heading">Hôtel 1</h5>
							</div>
						</div>
						<div class="media">
							<div class="media-left media-middle"> <img class="media-object" src="image/hostel.png" alt="..."> </div>
							<div class="media-body media-middle">
								<h5 class="media-heading">Hôtel 2</h5>
							</div>
						</div>
						<div class="media">
							<div class="media-left media-middle"> <img class="media-object" src="image/hostel.png" alt="..."> </div>
							<div class="media-body media-middle">
								<h5 class="media-heading">Hôtel 3</h5>
							</div>
						</div>
						<h4 id="restaurants">Restaurants</h4>
						<div class="media">
							<div class="media-left media-middle"> <img class="media-object" src="image/restaurants.png" alt="..."> </div>
							<div class="media-body media-middle">
								<h5 class="media-heading">Restaurant 1</h5>
							</div>
						</div>
						<div class="media">
							<div class="media-left media-middle"> <img class="media-object" src="image/restaurants.png" alt="..."> </div>
							<div class="media-body media-middle">
								<h5 class="media-heading">Restaurant 2</h5>
							</div>
						</div>
						<div class="media">
							<div class="media-left media-middle"> <img class="media-object" src="image/restaurants.png" alt="..."> </div>
							<div class="media-body media-middle">
								<h5 class="media-heading">Restaurant 3</h5>
							</div>
						</div>
					</article>
				</div>
				<div class="col-md-8">
					<div class="row">
						<aside class="miniatures">
							<?php 
						foreach($result as $value) {
							echo "<div class='col-xs-6 col-md-2'>
									<a href='place.php?place=".$value[0]."' class='thumbnail thumbnail_place'>
								  		<img src=".$value[3]." alt=".$value[0].">
									</a>
									<div class='caption'>
										<p>".$value[0]."<p>
									</div>
								</div>";
						}
					?>
						</aside>
						<aside id="geolocation_map"> </aside>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
	} else {
		// if user clicked directly on the "selection" item from the main menu
?>

		<!-- SELECTED ITENERARIES -->
		<div id="itinerary" class="row"> 
			
			<h3 class="text-center line-title lead"><span>La sélection de l'équipe</span> </h3>

			<div class="row">
				<p class="col-lg-6 col-lg-offset-3">Découvrez les circuits sélectionnés juste pour vous par l'équipe de Movie Journey !
				Pour créer votre circuit personnalisé, rien de plus simple : <a href="circuit.php">rendez-vous ici</a>, ajouter vos films à vos favoris et sélectionnez les lieux que vous voulez visiter.</p>
				<p id="journey">Bon voyage ! <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
</p>
			</div>

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

<?php 
	}	
?>

	
	</div>
<?php 
	include ('footer.php');
?>

<script>

/**
  * Basic Map
  */
var map;

$(document).ready(function(){
  var map = new GMaps({
    el: '#geolocation_map',
    lat: 48.6896172,
    lng: 6.1740439,
    zoom:6
  });
  GMaps.geolocate({
    success: function(position){
      map.setCenter(position.coords.latitude, position.coords.longitude);
       map.drawRoute({
        origin: [position.coords.latitude, position.coords.longitude],
        destination: [<?= $result[$int][1] ?>, <?= $result[$int][2] ?>],
        travelMode: 'driving',
        strokeColor: 'blue',
        strokeOpacity: 0.6,
        strokeWeight: 6
      });
	  <?php 
	  while ($int < $nbre) {
		  if ($int == $nbre -1) {
			 echo "map.drawRoute({
				origin: [".$result[$int][1].", ".$result[$int][2]."],
				destination: [position.coords.latitude, position.coords.longitude],
				travelMode: 'driving',
				strokeColor: 'blue',
				strokeOpacity: 0.6,
				strokeWeight: 6
				});"; 
		  } else {
			  echo "map.drawRoute({
				origin: [".$result[$int][1].", ".$result[$int][2]."],
				destination: [".$result[$int+1][1].", ".$result[$int+1][2]."],
				travelMode: 'driving',
				strokeColor: 'blue',
				strokeOpacity: 0.6,
				strokeWeight: 6
		     	});";
		  }
		  $int++;
	  }
	  foreach ($result as $value) {
		$title = "'".$value[0]."'";
		echo "map.addMarker({
      		lat: ".$value[1].",
      		lng: ".$value[2].",
      		title: ".$title.",
		    infoWindow: {
			    content: ".$title."}  
		});";
	  }
	  ?>
    },
    error: function(error){
		map.setCenter(48.6896172, 6.1740439);
			  <?php 
	  while ($int < $nbre-1) {
			  echo "map.drawRoute({
				origin: [".$result[$int][1].", ".$result[$int][2]."],
				destination: [".$result[$int+1][1].", ".$result[$int+1][2]."],
				travelMode: 'driving',
				strokeColor: 'blue',
				strokeOpacity: 0.6,
				strokeWeight: 6
		     	});";
		  		$int++;
	  }
	  foreach ($result as $value) {
		$title = "'".$value[0]."'";
		echo "map.addMarker({
      		lat: ".$value[1].",
      		lng: ".$value[2].",
      		title: ".$title.",
		    infoWindow: {
			    content: ".$title."}  
		});";
	  }
	  ?>
    },
    not_supported: function(){
		map.setCenter(48.6896172, 6.1740439);
		<?php 
	  while ($int < $nbre-1) {
			  echo "map.drawRoute({
				origin: [".$result[$int][1].", ".$result[$int][2]."],
				destination: [".$result[$int+1][1].", ".$result[$int+1][2]."],
				travelMode: 'driving',
				strokeColor: 'blue',
				strokeOpacity: 0.6,
				strokeWeight: 6
		     	});";
		  		$int++;
	  }
	  foreach ($result as $value) {
		$title = "'".$value[0]."'";
		echo "map.addMarker({
      		lat: ".$value[1].",
      		lng: ".$value[2].",
      		title: ".$title.",
		    infoWindow: {
			    content: ".$title."}  
		});";
	  }
	  ?>
    }
  });
});
</script>
</body>
</html>
