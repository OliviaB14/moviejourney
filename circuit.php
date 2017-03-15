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
<title>Circuits</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
	include('header.php');
?>

<div id="circuit1"> 
	Circuit français :
	<div id="Itinéraires">
		<ul>
		<?php 
			$ville1 = "Le pont de Bir Hakeim";	//Trouver un moyen de générer les villes automatiquement 
			$ville2 = "La cité médiévale de Carcassonne";
			$ville3 = "Le château de Beynac";

			function getLatLong($ville, $connection){ //Fonction qui va chercher les coordonnées de la ville entrée en paramètres.
				$strSQL="SELECT `latitude`, `longitude` FROM `place` WHERE name = '$ville'"; 
				$statement = $connection->prepare($strSQL);
				$statement->execute();
				$result = $statement->fetchAll();
				return $result;	//Retourne un tableau sous la forme $result[0][latitude][longitude]
			}

			echo "<li lat=".getLatLong($ville1,$connection)[0]['latitude']." long=".getLatLong($ville1,$connection)[0]['longitude']."><button>".$ville1."</button></li>
				  <li lat=".getLatLong($ville2,$connection)[0]['latitude']." long=".getLatLong($ville2,$connection)[0]['longitude']."><button>".$ville2."</button></li>
				  <li lat=".getLatLong($ville3,$connection)[0]['latitude']." long=".getLatLong($ville2,$connection)[0]['longitude']."><button>".$ville3."</button></li>";
				  //Affiche les villes, la première sur laquelle on clique sera le point de départ, la seconde le point d'arrivée.
		?>
		</ul>
	</div>
	<div id="map-canvas"></div>
	<p> <!-- Affiche la ville de départ séléctionnée au dessus ainsi que la distance entre les deux -->
		Départ : <span id="fromspan"></span><br/> 
		Arrivée : <span id="tospan"></span><br/>
		Distance : <span id="distspan"></span>
	</p>
</div>
<!-- Lien pour Maps --> <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<!-- jquery script --> <script type="text/javascript" src="js/jquery-3.1.1.js"></script> 
<!-- bootstrap file --> <script src="js/bootstrap.min.js"></script>
<!-- Lien pour Maps --> <script src="js/maps.js"></script>


</body>
</html>
