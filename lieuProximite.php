
<?php
	require('base.php');
		
	//$lat = $_GET[latitude];
	//$long = $_GET[longitude];
	
	$lat = 48.8553072;
	$long = 2.315835399999969;
	
	
	$sql="SELECT name, latitude, longitude, (3956 * 2 * ASIN(SQRT( POWER(SIN(( $lat - latitude) *  pi()/180 / 2), 2) +COS( $lat * pi()/180) * COS(latitude * pi()/180) * POWER(SIN(( $long - longitude) * pi()/180 / 2), 2) ))) AS distance FROM place HAVING distance <= 50 ORDER BY distance";
    $req =$connection->prepare($sql);
    $req->execute();
	$int = $req->rowCount();
	$res = $req->fetchAll();
			
	if ($int ==0) {
		echo 'non';
	} else {
		echo 'oui';
	}
	
?>