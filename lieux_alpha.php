<?php
  	// Connect to the database
  	require 'base.php';

  	// Character encoding of the database
  	$connection->exec("SET NAMES 'utf8'");
	session_start();

	// lancement de la requete des noms commençant par la lettre contenue dans l'url
	$sql = 'SELECT * FROM place WHERE name LIKE "?%";';

	// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
	$req = $connection->prepare($sql); 

	// on récupère l'id de la série contenu dans l'url et on l'ajoute à la requete
	$lettreurl = $_GET['page']; 
	$req->bindValue(1, $lettreurl, PDO::PARAM_STR);
	$req->execute();

	// stockage des éléments de la requête
	$rows = $req->fetchAll();
	for ($i = 0; $i < sizeof($rows); $i++){
	$ligne = $rows[$i];
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $lettreurl; ?> | Lieux cultes</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
	include('header.php');
?>

<?php
echo $row[1];
?>

</body>
</html>