
<?php
	// Connect to the database
	require('base.php');
	
	// Character encoding of the database
  	$connection->exec("SET NAMES 'utf8'");
		
	//$lat = $_GET[latitude];
	//$long = $_GET[longitude];
	
	$lat = 48.8553072;
	$long = 2.315835399999969;
	
	
	$sql="SELECT name, latitude, longitude, photo_path, (3956 * 2 * ASIN(SQRT( POWER(SIN(( $lat - latitude) *  pi()/180 / 2), 2) +COS( $lat * pi()/180) * COS(latitude * pi()/180) * POWER(SIN(( $long - longitude) * pi()/180 / 2), 2) ))) AS distance FROM place HAVING distance <= 50 ORDER BY distance";
    $req =$connection->prepare($sql);
    $req->execute();
	$response = array();
	$i = 0;
	while ($res = $req->fetch()) {
		$response[$i++] = $res[0];
		$response[$i++] = $res[1];
		$response[$i++] = $res[2];
		$response[$i++] = $res[3];
	};
	
	header('Content-Type: application/json; charset=utf-8'); //Pour définir le type de données envoyée (ici du JSON)
	echo json_encode($response);
		
?>