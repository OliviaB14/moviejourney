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
<title>Nos circuits</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/breadcrumb.css" rel="stylesheet" type="text/css">
<link href="css/circuit.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gmaps.js"></script>
<script src="js/maps.js"></script>
</head>

<body>

<?php
	include('header.php');
	
	$pays = $_GET["country"];
	$SQL = "SELECT place.name, place.latitude, place.longitude, place.photo_path FROM place, placetown, town WHERE town.country='$pays' AND town.id = placetown.town_id AND placetown.place_id = place.id";
	$statement = $connection->prepare($SQL);
	$statement->execute();
	$nbre = $statement->rowCount();
	$result = $statement->fetchAll(); //$result[0][0:name;1:latitude;2:longitude]
	$int = 0;
	
?>
 
 <div class="container-fluid">
     <div class="row">
	   <section class="col-md-12">
          <h3>Notre circuit - France</h3>
          <div class="row">
            <article class="col-md-4 hotels-restaurants">
			  <h4>Nos bon plans</h4>
              <div class="media">
				  <div class="media-left media-middle">
					<a href="#">
					  <img class="media-object" src="..." alt="...">
					</a>
				  </div>
				  <div class="media-body">
					<h5 class="media-heading">Hôtels de malade !</h5>
				  </div>
			  </div>
			  <div class="media">
				  <div class="media-left media-middle">
					<a href="#">
					  <img class="media-object" src="..." alt="...">
					</a>
				  </div>
				  <div class="media-body">
					<h5 class="media-heading">Restaurant de la mort qui tue !</h5>
				  </div>
			  </div>
			  <div class="media">
				  <div class="media-left media-middle">
					<a href="#">
					  <img class="media-object" src="..." alt="...">
					</a>
				  </div>
				  <div class="media-body">
					<h5 class="media-heading">Soirée pastéque !</h5>
				  </div>
			  </div>
			  <div class="media">
				  <div class="media-left media-middle">
					<a href="#">
					  <img class="media-object" src="..." alt="...">
					</a>
				  </div>
				  <div class="media-body">
					<h5 class="media-heading">J'ai envie de crêpes !</h5>
				  </div>
			  </div>
            </article>
            <div class="col-md-8">
              <div class="row">
                <aside class="miniatures">
                  <?php 
						foreach($result as $value) {
							echo "<div class='col-xs-6 col-md-2'>
									<a href='place.php?place=".$value[0]."' class='thumbnail'>
								  		<img src=".$value[3]." alt=".$value[0].">
									</a>
									<div class='caption'>
										<p>".$value[0]."<p>
									</div>
								</div>";
						}
					?>
                </aside>
                <aside id="geolocation_map">
                </aside>
              </div>
            </div>
          </div>
        </section>
     </div>
	 
</div>



</body>
</html>

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
      alert('Geolocation failed: '+error.message);
    },
    not_supported: function(){
      alert("Your browser does not support geolocation");
    }
  });
});
</script>