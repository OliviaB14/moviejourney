<?php
  // Connect to the database
  require 'base.php';
  
  // Character encoding of the database
  $connection->exec("SET NAMES 'utf8'");
  
  //Démarrage ou restauration de la session
  session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lieux cultes</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
	include('header.php');
?>

<!-- MAIN CONTAINER : all page is contained -->
<div class="container-fluid">
	<div class="row">
		<!-- Affichage de l'alphabet pour la navigation dans les lieux cultes 
		Génération de chaque letre/lien à partir d'un tableau contenant l'alphabet -->
		<div id="nav-recherche-film">
			<ul class="nav nav-pills inner-nav-recherche-film">
				<li role="presentation" class="first-item-recherche"><a class="ancre-recherche-film" href="#"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a></li>
				<?php
				$alphabet = range("A","Z");
				
				foreach($alphabet as $lettre){
					if (!empty($_GET['page']) && ($_GET['page'] == $lettre)) {
						echo '<li role="presentation" class="active item-recherche"><a class="lettre-recherche-film" href="movies.php?page='.$lettre.'">'.$lettre.'</a></li>';
					} else {
						echo '<li role="presentation" class="item-recherche"><a class="lettre-recherche-film" href="movies.php?page='.$lettre.'">'.$lettre.'</a></li>';
					}
				}
				?>
			</ul>
		</div>
	</div>
	
	<!-- Afficher des lieux aléatoirement pour remplir la page 
	On pourra par la suite afficher les lieux aléatoirement en fonction des préférences de l'utilisateur s'il est connecté-->	
	<?php
	//l'utilisateur viens d'arriver sur la page
	if (empty($_GET['page'])) {
		// création de la requête
		$sql = 'SELECT * FROM movie ORDER BY rand()';  
		// lancement de la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
		$req = $connection->prepare($sql); 
		$req->execute();
	?>
	
	<div class="row">
		<div class="col-xs-6 col-md-3 text-center">	
			<div class="thumbnail film-lieux"> 
				<?php
				$rows = $req->fetch();
				?>
				<!-- Affichage de l'image du lieu -->
				<img class="image-film-lieux" src="<?php echo $rows['backdrop_path'] ?>" alt="Photo du lieu"/>
				<div class="caption desc-image-film-lieux">
					<p class="nom-film-lieux"><?php echo $rows['name']; ?></p>
					<a href="movies.php?page=<?php echo $rows['name'];?>" data-toggle="modal" data-target="#myModal2"><p class="more-film-lieux">Lieux cultes associés</p></a>
				</div>
			</div>
		</div>
			
		<div class="col-xs-6 col-md-3 text-center">	
			<div class="thumbnail film-lieux"> 
				<?php
				$rows = $req->fetch();
				?>
				<!-- Affichage de l'image du lieu -->
				<img class="image-film-lieux" src="<?php echo $rows['backdrop_path'] ?>" alt="Photo du lieu"/>
				<div class="caption desc-image-film-lieux">
					<p class="nom-film-lieux"><?php echo $rows['name']; ?></p>
					<a href="movies.php?page=<?php echo $rows['name'];?>" data-toggle="modal" data-target="#myModal2"><p class="more-film-lieux">Lieux cultes associés</p></a>
				</div>
			</div>
		</div>
			
		<div class="hidden-xs col-md-3 text-center">	
			<div class="thumbnail film-lieux"> 
				<?php
				$rows = $req->fetch();
				?>
				<!-- Affichage de l'image du lieu -->
				<img class="image-film-lieux" src="<?php echo $rows['backdrop_path'] ?>" alt="Photo du lieu"/>
				<div class="caption desc-image-film-lieux">
					<p class="nom-film-lieux"><?php echo $rows['name']; ?></p>
					<a href="movies.php?page=<?php echo $rows['name'];?>" data-toggle="modal" data-target="#myModal2"><p class="more-film-lieux">Lieux cultes associés</p></a>
				</div>
			</div>
		</div>
			
		<div class="hidden-xs col-md-3 text-center">	
			<div class="thumbnail film-lieux"> 
				<?php
				$rows = $req->fetch();
				?>
				<!-- Affichage de l'image du lieu -->
				<img class="image-film-lieux" src="<?php echo $rows['backdrop_path'] ?>" alt="Photo du lieu"/>
				<div class="caption desc-image-film-lieux">
					<p class="nom-film-lieux"><?php echo $rows['name']; ?></p>
					<a href="movies.php?page=<?php echo $rows['name'];?>" data-toggle="modal" data-target="#myModal2"><p class="more-film-lieux">Lieux cultes associés</p></a>
				</div>
			</div>
		</div>
	</div>
	
	<?php
	} else if (($_GET['page'] == "A") || ($_GET['page'] == "B") || ($_GET['page'] == "C") || ($_GET['page'] == "D") || ($_GET['page'] == "E") || ($_GET['page'] == "F") || ($_GET['page'] == "G") || ($_GET['page'] == "H") || ($_GET['page'] == "I") || ($_GET['page'] == "J") || ($_GET['page'] == "K") || ($_GET['page'] == "L") || ($_GET['page'] == "M") || ($_GET['page'] == "N") || ($_GET['page'] == "O") || ($_GET['page'] == "P") || ($_GET['page'] == "Q") || ($_GET['page'] == "R") || ($_GET['page'] == "S") || ($_GET['page'] == "T") || ($_GET['page'] == "U") || ($_GET['page'] == "V") || ($_GET['page'] == "W") || ($_GET['page'] == "X") || ($_GET['page'] == "Y")|| ($_GET['page'] == "Z")){
		$lettre = $_GET['page'];
		// création de la requête
		$sql = "SELECT name, backdrop_path FROM movie WHERE name LIKE '$lettre%' ORDER BY name";  
		// lancement de la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
		$req = $connection->query($sql); 
		$res = $req->fetchAll();
		echo "<div class='row'>";
		foreach($res as $value) {
	?>	
			<div class="col-xs-6 col-md-3 text-center">	
				<div class="thumbnail film-lieux"> 
					<!-- Affichage de l'image du lieu -->
					<img class="image-film-lieux" src="<?php echo $value[1]; ?>" alt="Photo du lieu"/>
					<div class="caption desc-image-film-lieux">
						<p class="nom-film-lieux"><?php echo $value[0]; ?></p>
						<a href="movies.php?page=<?php echo $value[0]; ?>" data-toggle="modal" data-target="#myModal2"><p class="more-film-lieu">Lieux cultes associés</p></a>
					</div>
				</div>
			</div>
			<?php
		}
		echo "</div>";
		//l'utilisateur a choisi de regarder les lieux cultes d'un film
	} else {
		$film = $_GET['page'];
		// création de la requête
        $sql = "SELECT place.name, place.photo_path, place.description FROM place, movie, placemovie WHERE movie.name = '$film' AND movie.id = placemovie.movie_id AND placemovie.place_id = place.id";
		// lancement de la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
		$req = $connection->query($sql); 
		$res = $req->fetchAll();
		echo "<h2 class='nom-film-h2-lieux'>".$film."</h2>";
		foreach($res as $value) {
		?>	
			<div class='row'>
				<div class="col-xs-10 col-md-2">
				</div>
				<div class="col-xs-10 col-md-8 text-center">	
					<div class="thumbnail film-lieux"> 
						<!-- Affichage de l'image du lieu -->
						<img class="image-film-lieux" src="<?php echo $value[1]; ?>" alt="Photo du lieu"/>
						<div class="caption desc-image-film-lieux">
							<p class="nom-lieu-lieux"><?php echo $value[0]; ?></p>
							<p class="desc-lieu-lieux"><?php echo $value[2]; ?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-10 col-md-2">
				</div>
			</div>
		<?php
		}
	}
		?>
	
</div>

</body>
</html>
