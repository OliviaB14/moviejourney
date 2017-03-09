<?php
  // Connect to the database
  require 'base.php';

  // Character encoding of the database
  $connection->exec("SET NAMES 'utf8'");
?>
<!DOCTYPE html>
<html lang="fr"><!-- language -->
	<head>
		<!-- META TAGS -->
		<!-- encoding -->
		<meta charset="utf-8"/>
		<!-- mobile friendly tag -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<!-- main stylesheet -->
		<link rel="stylesheet" href="css/account.css" type="text/css" />
		<title>Créer un compte - Movie Journey</title>
	</head>

	<body>
	<?php
		include('header.php')
	?>

	<!-- MAIN CONTAINER : all page is contained -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 col-xs-12" id="subscription">
				<h3>Pas encore inscrit ?</h3>
				  <div class="panel">
				    <form class="form-horizontal" method="POST" action="create-account.php">
					  <div class="form-group"> <!-- choosen email address -->
					    <label for="identifier2" class="col-sm-3 control-label">Adresse e-mail</label>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" name="identifier2" id="identifier2" placeholder="Email">
					    </div>
					  </div>
					  <div class="form-group"> <!-- email address confirmation -->
					    <label for="identifier3" class="col-sm-3 control-label"></label>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" name="identifier3" id="identifier3" placeholder="Confirmer votre adresse e-mail">
					    </div>
					  </div>
					  <div class="form-group"> <!-- choosen password -->
					    <label for="password2" class="col-sm-3 control-label">Mot de passe</label>
					    <div class="col-sm-9">
					      <input type="password" class="form-control" name="password2" id="password2" placeholder="Mot de passe">
					    </div>
					  </div>
					  <div class="form-group"> <!-- password confirmation -->
					    <label for="confPassword2" class="col-sm-3 control-label"></label>
					    <div class="col-sm-9">
					      <input type="password" class="form-control" name="confPassword2" id="confPassword2" placeholder="Confirmer le mot de passe">
					    </div>
					  </div>
					  <div class="form-group"> <!-- user's favorite movie types -->
					    <label for="genres" class="col-sm-3 control-label"></label>
					    <div class="col-sm-9">
					    	<?php

					    	$query = requete_bdd($connection, "SELECT type FROM type");
							$query->execute();

							$row = $query->fetchAll();
							foreach($row as $value) {
								print("<input type='checkbox' id='cbox2' value='checkbox1'> ". $value." <label for='cbox2'> " .$value. "</label>");
							}

					    	?>
					    </div>
					  </div>
					  <div class="form-group"> <!-- subscription button -->
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default" name="sub-btn">S'inscrire</button>
					    </div>
					  </div>
					</form>
				  </div>
			</div>
		</div>
	</div>

	<?php
		include('footer.php');

		function requete_bdd($bdd, $req){
			/* will return all data from the database as json data
				
				------- ARGUMENTS
				$req is a string
				$bdd is the database
			*/
			
			$query = $bdd->prepare($req);
			return $query;
			/* returned variable is an pdo object */
		}


	?>

	</body>
</html>