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
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
		<!-- google fonts -->

		<title>Mon compte - Movie Journey</title>
		<link rel="icon" type="image/png" href="image/favicon.png" />
	</head>

	<body>

	<?php include('header.php'); ?>

	<!-- MAIN CONTAINER : all page is contained -->
	<div class="container-fluid">

		<!-- advertisement or movies -->
		<div class="row advertisement">
		</div>

		<!-- if user is connected -->
		<?php if($connect){ 
			global $connection;
			$sql = "SELECT firstname FROM users WHERE email = '".$_SESSION['identifiant']."'";
			$req = $connection -> query($sql);
			$data = $req -> fetch();
			$_SESSION['firstname'] = $data['firstname']; //test de connexion
		?>

		<div class="row">
			<div class="useraccount col-sm-6 col-sm-offset-3 col-xs-12">
				<h3 id="username">Bonjour <strong><?php echo $_SESSION['firstname'];?></strong></h3>
			    <ul class="nav nav-tabs nav-justified" id="mytabs">
			        <li class="active"><a href="#useracc"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mon compte</a></li>
			        <li><a href="#userpreferences"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Mes préférences</a></li>
			    </ul>
			</div>
		</div>
		<div class="row">
		    <div class="tab-content useraccount col-sm-6 col-sm-offset-3 col-xs-12">
		        <div id="useracc" class="tab-pane fade in active text-justify">
		            <h4>Mes informations</h4>
					  <div class="form-group row">
					    <p class="col-xs-2"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></p>
					    <div class="col-xs-10">
					    	<?php echo $_SESSION['identifiant']; ?>
					    </div>
					  </div>

					  <!-- formulaire pour modifier le mot de passe ! -->
					  <div class="form-group row">
					    <label class="col-xs-2" for="modifPassword"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
					    <div class="col-xs-10">
					    	<input type="password" name="modifPassword" class="form-control" id="modifPassword" placeholder="Modifier mon mot de passe">
					    </div>
					  </div>



					  
		        </div>
		        <div id="userpreferences" class="tab-pane fade text-justify">
		        	<?php 
		            	$user = $_SESSION['id'];
		            				
					?>
		        	<h4>Mes séjours</h4>

		        	<h4>Genres de films préférés</h4>
		        	<!-- request : select user's favorite movie types	-->	
		            <p><?php $sql = "
		            			SELECT type.type 
		            			FROM type, userstypes, users 
		            			WHERE '$user' = userstypes.user_id
		            				AND userstypes.type_id = type.id
		            			";
						$req = $connection -> query($sql);
						$data = $req -> fetchAll();
						foreach($data as $key){ echo $key[0];} 
						?></p>
		            

		            <h4>Mes films favoris</h4>
		            	<div class="styled-select">
			            <?php $sql = "
			            			SELECT movie.name 
			            			FROM users, usersfavorite_movies, movie 
			            			WHERE '$user' = usersfavorite_movies.user_id 
			            				AND usersfavorite_movies.movie_id = movie.id
			            			";
							$req = $connection -> query($sql);
							$data = $req -> fetchAll();
							if(count($data) != 0){
							?>
							<select>
							<?php
								$i = 1;
								while($i < count($data) -1){
									echo "<option>";
									print_r($data[$i]['name']);
									echo "</option>";
									$i++;
								}  
							?>
							</select>
							<?php
							} 
							?>
		    
		    				<a href="movies.php" title="Ajouter d'autres films à mes favoris"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span> Ajouter d'autres films à mes favoris</a> 
		            	</div>

		        </div>

		        <!-- new reservation -->
		        <div id="newcircuit">
		        <a href="circuit.php"><button class="btn btn-default col-xs-12" id="reservation">Nouvelle réservation <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button></a>
		        </div>
		        <div id="settings" class="row">
			        <!-- deconnection button -->
					<div class="btn deconnected col-xs-6">
						<a href="deconnexion.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Déconnexion </a>
					</div>

					<div id="delete-account">
						<form method="post" action="delete-account.php">
						<button class="col-xs-6 btn" name="deleting_account"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer mon compte</button>
						</form>
					</div>
				</div>
			</div>
		</div>


	</div>

		<?php } else{ ?>
		<!-- if user isn't connected -->
		<div class="row" id="panels">
			<!-- 

			Panel for connection 

			-->
			<div class="col-lg-6 col-xs-12" id="connection">
				<h3>Accéder à mon compte</h3>
				  <div class="panel">
				    <form class="form-horizontal" action="connexion.php" method="post">
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
					      <button type="submit" class="btn btn-default" name="con-btn">Connexion</button>
					    </div>
					  </div>
					</form>
				  </div>
			</div>

			<!-- Panel for subscription -->
			<div class="col-lg-6 col-xs-12" id="subscription">
				<h3>Pas encore inscrit ?</h3>
				<p> Il suffit de cliquer sur le bouton ci-dessous. </p>
				<a href="create-account.php"><button type="submit" id="inscription" class="btn btn-default" name="sub-btn">S'inscrire</button></a>
			</div>
		</div>

		<?php } ?>
	</div>

	<?php
		include('footer.php')
	?>
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/tabsmenu.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>