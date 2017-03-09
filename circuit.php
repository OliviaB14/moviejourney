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
	include('base.php');

/*	$strSQL="SELECT latitude, longitude FROM place WHERE name=".$id.""; 
		$statement = $connection->query($strSQL);
	
	
	while($donnees=$statement->fetch()){

		// récupération et stockage du nom de la série dans un variable : 
		$nom = $donnees['name'];

		// récupération et stockage de l'URL de l'affiche de la série : 
		if($donnees['poster_path']==NULL){ //si l'affiche n'est pas dans la bdd
			$affiche="../../images/non_dispo.jpg"; //on la remplace par une image d'indisponibilité de l'affiche
		}else{
			$affiche="https://image.tmdb.org/t/p/w780".$donnees['poster_path'];
		 }
		
		// récupération et stockage du synopsis de la série : 
		$synopsis=$donnees['overview']; */
?>

<div id="circuit1"> 
	Circuit français :
	<p>
		Départ : <span id="fromspan"></span><br/>
		Arrivée : <span id="tospan"></span><br/>
		Distance : <span id="distspan"></span>
	</p>
	<div id="map-canvas"></div>
	<div id="Itinéraires">
		<ul>
		<?php 
			$ville1 = "Le pont de Bir Hakeim";
			$ville2 = "La cité médiévale de Carcassonne";
			$ville3 = "Le château de Beynac";
			$strSQL="SELECT `latitude`, `longitude` FROM `place` WHERE name = '$ville1'"; 
			$statement = $connection->prepare($strSQL);
			$statement->execute();
			$result = $statement->fetchAll();
			$strSQL1="SELECT `latitude`, `longitude` FROM `place` WHERE name = '$ville2'"; 
			$statement1 = $connection->prepare($strSQL1);
			$statement1->execute();
			$result1 = $statement1->fetchAll();
			echo "<li lat=".$result[0]['latitude']." long=".$result[0]['longitude'].">".$ville1."</li>
				  <li lat=".$result1[0]['latitude']." long=".$result1[0]['longitude'].">".$ville2."</li>
				  <li>".$ville3."</li>";
		?>
		</ul>
	</div>
</div>

<!-- Lien pour Maps --> <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<!-- jquery script --> <script type="text/javascript" src="js/jquery-3.1.1.js"></script> 
<!-- bootstrap file --> <script src="js/bootstrap.min.js"></script>
<!-- Lien pour Maps --> <script src="js/maps.js"></script>


</body>
</html>
