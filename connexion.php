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
		include('header.php');
		$_SESSION['firstname'] = "Olisomotomish";
	?>

	<!-- MAIN CONTAINER : all page is contained -->
	<div class="container-fluid">
		<div class="row">
			<div class="useraccount col-sm-6 col-sm-offset-3 col-xs-12">
				<h3>Bonjour <?php echo $_SESSION['firstname'];?></h3>
			    <ul class="nav nav-tabs nav-justified" id="mytabs">
			        <li class="active"><a href="#useracc">Mon compte</a></li>
			        <li><a href="#userpreferences">Mes préférences</a></li>
			    </ul>
			</div>
		</div>
		<div class="row">
	    <div class="tab-content useraccount col-sm-6 col-sm-offset-3 col-xs-12"">
	        <div id="useracc" class="tab-pane fade in active text-justify">
	            <h4>Mon compte</h4>
	            <form>
				  <div class="form-group">
				    <label for="exampleInputEmail3" class="col-xs-2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
				    <div class="col-xs-10">
				    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputPassword3">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> Remember me
				    </label>
				  </div>
				  <button type="submit" class="btn btn-default">Sign in</button>
				</form>
	        </div>
	        <div id="userpreferences" class="tab-pane fade text-justify">
	            <h4>Films préférés</h4>
	            <p></p>
	            <h4>Lieux cultes visités</h4>
	            <p class=></p>
	        </div>
	    </div>
		</div>
	</div>

		<?php
			include('footer.php')
		?>

		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/tabsmenu.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		</body>
		</div>
</html>