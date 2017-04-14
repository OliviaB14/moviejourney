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
<link rel="stylesheet" type="text/css" href="HoverEffectIdeas/HoverEffectIdeas/css/normalize.css">
<link rel="stylesheet" type="text/css" href="HoverEffectIdeas/HoverEffectIdeas/css/set1.css">
<script src="js/button-fav.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCMGeFAtGWlSG2me_ccsocwSU1fNzcXv8g'></script>
<!-- clé API google map Javascript API :  AIzaSyCMGeFAtGWlSG2me_ccsocwSU1fNzcXv8g -->
<link rel="icon" type="image/png" href="image/favicon.png" />
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
        $sql = "SELECT place.name, place.photo_path, place.description, place.latitude, place.longitude, town.country, town.name, place.id, place.photo_path_two, place.photo_path_three, place.photo_path_four FROM place, movie, placemovie, town, placetown WHERE place.name = '$place' AND movie.id = placemovie.movie_id AND placemovie.place_id = place.id AND place.id = placetown.place_id AND placetown.town_id = town.id";
		// lancement de la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
		$req = $connection->query($sql); 
		$res = $req->fetch();
		// variable utilisé pour prochaine requête
		/*
		$res[0] : place name
		$res[1] : place photo_path
		$res[2] : place description
		$res[3] : place latitude
		$res[4] : place longitude
		$res[5] : town country
		$res[6] : town name
		$res[7] : place id
		$res[8] : place photo_path2
		$res[9] : place photho_path3
		$res[10] : place photo_path4
		 */
		$nom = $res[0];
		$lat = $res[3];
		$long = $res[4];
		$id_place = $res[7];
		//$id_user = $_SESSION['id'];
	?>

		<div class="row">
			<div class="description-place">

			<!-- place pictures panorama -->
				<div class="col-md-9">
					<figure class="max">
		                <li id="slide-1">
		                	<img src="<?php echo $res[8]; ?>" class="img-responsive" alt="Photo du lieu" />
		                </li>
		                </figure>
		            <figure class="max">
		                <li id="slide-2">
		                	<img src="<?php echo $res[9]; ?>" class="img-responsive" alt="Photo du lieu" />
		                </li>
		            </figure>
		            <figure class="max">
		                <li id="slide-3">
		                	<img src="<?php echo $res[10]; ?>" class="img-responsive" alt="Photo du lieu" />
		                </li>
		            </figure>
		             <figure class="max">
		                <li id="slide-4">
		                	<img class="img-responsive" src="<?php echo $res[1] ?>" alt="Photo du lieu"/>
		                </li>
		            </figure>		            
		        </div>

				<div class="text-place col-md-3">
					<div class="inner-text-place">
						<!-- Place description -->
						<h3><?php echo $res[0] ?></h3>
						<p><?php echo $res[2] ?></p>
						
					</div>
				</div>
			</div>
		</div>
		<div class="add-fav">
			<div class="row">
				<!-- place pictures miniatures -->
				<figure class="min">
	                <li><a title="<?php echo $res[0]; ?> - Photo 1" href="#slide-1"><img src="<?php echo $res[8]; ?>"/></a></li>
	                <li><a title="<?php echo $res[0]; ?> - Photo 2" href="#slide-2"><img src="<?php echo $res[9]; ?>" /></a></li>
	                <li><a title="<?php echo $res[0]; ?> - Photo 3" href="#slide-3"><img src="<?php echo $res[10]; ?>"  /></a></li>
	                <li><a title="<?php echo $res[0]; ?> - Photo 4" href="#slide-4"><img src="<?php echo $res[1]; ?>"/></a></li>
            	</figure>
		    </div>
			<div class="row">
				<div class="col-md-12">
					<?php 
					if ($connect == true) {
						$user_id = $_SESSION['id'];
						$sql = "SELECT * FROM usersfavorite_places WHERE place_id = '$id_place' AND user_id = '$user_id'";
						$req = $connection -> query($sql);
						$int = $req->rowCount();
						if ($int == 0) {
					?>
						<h4 class="fav-1">Ce lieu vous plaît ? Vous désirez le visiter ?</h4>
						<h4 class="fav-2">Ajoutez-le à vos favoris et organisez votre voyage !</h4>
						<!-- ajouter condition php si le lieu n'est pas déjà dans les favoris de l'utilisateur -->
						<button type="button" id="add_fav" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true" title="Ajouter le lieu à mes favoris"></span></button>
					<?php
						} else {
					?>
						<h4 class="fav-1">Ce lieu apparaît déjà dans vos favoris</h4>
						<h4 class="fav-2">Retrouvez-le dans votre page <a href="circuit.php">mes circuits</a> et organisez votre voyage !</h4>
						<!-- ajouter condition php si le lieu n'est pas déjà dans les favoris de l'utilisateur -->
						<button type="button" id="add_fav" class="btn btn-lg btn-default button-fav-pink"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true" title="Ajouter le lieu à mes favoris"></span></button>
					<?php
						}
					} else {
					?>
						<h4 class="fav-1">Ce lieu vous plaît ? Vous désirez le visiter ?</h4>
						<h4 class="fav-2">Ajoutez-le à vos favoris et organisez votre voyage !</h4>
						<!-- ajouter condition php si le lieu n'est pas déjà dans les favoris de l'utilisateur -->
						<button type="button" id="add-fav" onclick='openNav()' class="btn btn-lg btn-default"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true" title="Ajouter le lieu à mes favoris"></span></button>
					<?php
					}
					?>
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
							  <div class="proxiplace col-xs-6 col-md-3 text-center effect-lily">
								<div class="grid">
									<figure class="effect-lily">
										<img src="<?php echo $row[1] ?>" alt="<?php echo $row[0] ?>"/>
										<figcaption>
											<h2><span><?php echo $row[0] ?></span></h2>
											<a href="place.php?place=<?php echo $row[0] ?>">Découvrir ce lieu</a>
										</figcaption>			
									</figure>				
								</div>
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
	var lat = <?= $lat; ?>;
	var long = <?= $long; ?>;
	var nom = '<?= $place; ?>';
	
	function init_map(){
		var myOptions = {zoom:19,center:new google.maps.LatLng(lat,long),mapTypeId: google.maps.MapTypeId.HYBRID};
		map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
		marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(lat,long)});
		infowindow = new google.maps.InfoWindow({content:nom});
		google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
		infowindow.open(map,marker);
	}
	google.maps.event.addDomListener(window, 'load', init_map);
	
	$( "#add_fav" ).click(function() {
			var lieu = <?= $id_place ?>;
			var proposition = "lieu";
		if ($(this).css("background") == "rgb(255, 192, 203) none repeat scroll 0% 0% / auto padding-box border-box") {
			supprfavoris(lieu, proposition);
		} else {
			ajoutfavoris(lieu, proposition);
		}
	});
</script>

</html>



