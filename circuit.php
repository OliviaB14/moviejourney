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
	<div id="map-canvas"></div>
</div>

<!-- Lien pour Maps --> <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<!-- jquery script --> <script type="text/javascript" src="js/jquery-3.1.1.js"></script> 
<!-- bootstrap file --> <script src="js/bootstrap.min.js"></script>
<!-- Lien pour Maps --> <script src="js/maps.js"></script>


</body>
</html>
