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
		<title>Se connecter - Movie Journey</title>
	</head>

	<body>
	<?php
		include('header.php')
	?>

	<!-- MAIN CONTAINER : all page is contained -->
	<div class="container-fluid">

		<!-- advertisement or movies -->
		<div class="row advertisement">
		</div>

		<!-- if user is connected -->
		<?php if($connect){ ?>

		<div class="row">
			
		</div>

		<?php } else{ ?>
		<!-- if user isn't connected -->
		<div class="row" id="panels">
			<!-- 

			Panel for connection 

			-->
			<div class="col-lg-6 col-xs-12" id="connection">
				<h3>Connexion</h3>
				  <div class="panel">
				    <form class="form-horizontal">
					  <div class="form-group">
					    <label for="identifier1" class="col-sm-3 control-label">Adresse e-mail</label>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" name="identifier1" id="identifier1" placeholder="Email">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="password1" class="col-sm-3 control-label">Mot de passe</label>
					    <div class="col-sm-9">
					      <input type="password" class="form-control" name="password1" id="password1" placeholder="Mot de passe">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <div class="checkbox">
					        <label>
					          <input type="checkbox" name="rememberCookie"> Se souvenir de moi
					        </label>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default" name="con-btn">Connexion</button>
					    </div>
					  </div>
					</form>
				  </div>
			</div>

			<!-- 

			Panel for subscription 
			
			-->
			<div class="col-lg-6 col-xs-12" id="subscription">
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
					  <div class="form-group"> <!-- subscription button -->
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default" name="sub-btn">S'inscrire</button>
					    </div>
					  </div>
					</form>
				  </div>
			</div>
		</div>

		<?php } ?>
	</div>

	<?php
		include('footer.php')
	?>

	</body>
</html>