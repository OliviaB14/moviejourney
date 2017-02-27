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
<link href="style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
	include('header.php');
?>

<!-- Affichage de l'alphabet pour la navigation dans les lieux cultes 
Génération de chaque letre/lien à partir d'un tableau contenant l'alphabet -->
<div id="nav-alpha">
	<?php
	$alphabet = range("A","Z");

	foreach($alphabet as $lettre){
	    echo '<a href="lieux_alpha.php?page='.$lettre.'">'.$lettre.'</a>'.' ';
	}
	?>
</div>

	<!-- Afficher des lieux aléatoirement pour remplir la page 
	On pourra par la suite afficher les lieux aléatoirement en fonction des préférences de l'utilisateur s'il est conencté-->	
	<?php
	// création de la requête
	$sql = 'SELECT * FROM place;';  
	// lancement de la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
	$req = $connection->prepare($sql); 
	$req->execute();
	$rows = $req->fetchAll();
	?>

<div id="lieu">
	<?php
	// récupération d'une ligne aléatoirement
	$ligne = $rows[rand(0,sizeof($rows))];
	?>
	<!-- Affichage de l'image du lieu -->
	<div id="poster" class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
	    <a href='' data-toggle="modal" data-target="#myModal2"><img src="<?php echo $ligne['photo_path'] ?>" alt="Photo du lieu"/></a>
	    <p><?php echo $ligne['name']; ?></p>
	</div>
</div>

<div id="lieu">
	<?php
	// récupération d'une ligne aléatoirement
	$ligne = $rows[rand(0,sizeof($rows))];
	?>
	<!-- Affichage de l'image du lieu -->
	<div id="poster" class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
	    <a href='' data-toggle="modal" data-target="#myModal2"><img src="<?php echo $ligne['photo_path'] ?>" alt="Photo du lieu"/></a>
	    <p><?php echo $ligne['name']; ?></p>
	</div>
</div>

<div id="lieu">
	<?php
	// récupération d'une ligne aléatoirement
	$ligne = $rows[rand(0,sizeof($rows))];
	?>
	<!-- Affichage de l'image du lieu -->
	<div id="poster" class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
	    <a href='' data-toggle="modal" data-target="#myModal2"><img src="<?php echo $ligne['photo_path'] ?>" alt="Photo du lieu"/></a>
	    <p><?php echo $ligne['name']; ?></p>
	</div>
</div>

<div id="lieu">
	<?php
	// récupération d'une ligne aléatoirement
	$ligne = $rows[rand(0,sizeof($rows))];
	?>
	<!-- Affichage de l'image du lieu -->
	<div id="poster" class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
	    <a href='' data-toggle="modal" data-target="#myModal2"><img src="<?php echo $ligne['photo_path'] ?>" alt="Photo du lieu"/></a>
	    <p><?php echo $ligne['name']; ?></p>
	</div>
</div>

</body>
</html>
