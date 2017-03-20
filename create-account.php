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
		<meta name="description" content="Créez votre compte Movie Journey et réservez votre circuit cinématographique !" />

		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<!-- main stylesheet -->
		<link rel="stylesheet" href="css/account.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">		
		<!--font-family title -->
		
		<title>Créer mon compte - Movie Journey</title>
	</head>

	<body>
	<?php
		include('header.php')
	?>

	<!-- MAIN CONTAINER : all page is contained -->
	<div class="container-fluid">



		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 col-xs-12" id="subscription">
				<h3>Créer mon compte</h3>
				  <div class="panel">
				    <form class="form-horizontal" method="POST" action="create-account.php">
				      <div class="form-group"> <!-- first name -->
					    <label for="firstname" class="col-sm-3 control-label">Prénom*</label>
					    <div class="col-sm-4">
					      <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom">
					    </div>
					    <label for="lastname" class="col-sm-1 control-label">Nom*</label>
					    <div class="col-sm-4"><!-- last name -->
					      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="birthdate" class="col-sm-3 control-label">Date de naissance</label>
					    <div class="col-sm-9"><!-- last name -->
					      <input type="date" class="form-control" name="birthdate">
					    </div>
					  </div>
					  <div class="form-group"> <!-- choosen email address -->
					    <label for="email2" class="col-sm-3 control-label">Adresse e-mail*</label>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" name="email2" id="email2" placeholder="Email"
					      <?php
					      	// if the user has begin fulfill the account.php page to subscribe, it will get its infos in this advanced subscription form
					      	if(isset($_POST['email2'])){
					      		echo "value='".$_POST['email2']."'";
					      	}
					      ?>
					      >
					    </div>
					  </div>
					  <div class="form-group"> <!-- email address confirmation -->
					    <label for="email3" class="col-sm-3 control-label"></label>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" name="email" id="email3" placeholder="Confirmer votre adresse e-mail"
					      <?php
					      	// if the user has begin fulfill the account.php page to subscribe, it will get its infos in this advanced subscription form
					      	if(isset($_POST['email2'])){
					      		echo "value='".$_POST['email2']."'";
					      	}
					      ?>
					      >
					    </div>
					  </div>
					  <div class="form-group"> <!-- choosen password -->
					    <label for="password2" class="col-sm-3 control-label">Mot de passe*</label>
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
					    <div class="col-sm-12 movie_genres">
					    	<p class="col-sm-3">Choisissez vos genres de films préférés :</p>
					    	<div class="col-sm-9">
					    	<?php

					    	$query = requete_bdd($connection, "SELECT type FROM type");
							$query->execute();

							$row = $query->fetchAll();
							foreach($row as $key => $value) {
								echo "<input type='checkbox' value='" .$value['type']. "' name='" .$value['type']. "'> <label>" .$value['type']."</label> ";
							}
					    	?>
					    	</div>
					    </div>
					  </div>
					  <div class="form-group"> <!-- subscription button -->
					    <div class="col-sm-12">
					    	<p>* Champs obligatoires</p>
					      <div class="alert alert-info" role="alert">En cliquant sur "Enregistrer", j'accepte les <a href="CGV.php" title="Conditions Générales de Vente et d'utilisation" target="_blank">conditions générales de vente et d'utilisation</a> du site movie-journey.com</div>
					      <button type="submit" class="btn btn-default" name="sub-btn">Enregistrer</button>
					    </div>
					  </div>
					</form>
				  </div>
			</div>
		</div>

		<!-- advertisement or movies -->
		<div class="row advertisement">
		</div>

	</div>

	<?php
		include('footer.php');


		/* ==========================================================

		CUSTOMED PHP FUNCTIONS

		========================================================== */

		function check

		function verifemail($input){
		// goal => email verification
		$bool = (preg_match("/@/", $input) + preg_match("/./", $input)) == 2;

		if (!$bool){
			echo "<p>Adresse mail erronée</p>";
		}
		return $bool;
		// return true if the email is valid 
		// false otherwise

	}

	function verifmdplong($input){
		// goal => password length verification : 8 characters at least
		$bool = strlen($input) >= 8;
		if (!$bool){
			echo "<p>Mot de passe inférieur à 8 caractères</p>";
		}
		return $bool;
		// return true if password is at least eight charactères
		//false otherwise
	}

	function verifmdps($input1, $input2){
		// goal => if the password and its confirmation are exactly the same
		// this function is case sensitive
		$bool = strcmp($input1,$input2);
		// $bool = 0 si les mots de passes sont identiques
		if ($bool != 0){
			echo "<p>Les mots de passe ne correspondent pas</p>";
		}
		return (!$bool);
		// return true if the passwords are the same, case sensitive
		// false otherwise

	}

	function verifpseudo($input){
		// goal => username length verification : 4 characters at least
		$bool = strlen($input) >= 4;
		if (!$bool){
			echo "Le nom d'utilisateur est trop court";
		}
		return $bool;
		// return true if the username contains at least 4 characters
		// false otherwise
	}

	function verifgenres(){
		// goal => if the user selected at least two music genres <=> two checkboxes
		$bool = false;
		// number of music genres selected
		if(isset($_POST["music"])){
			$bool = count($_POST["music"]) >= 2;
			if(!$bool){
				echo "<p>Sélectionnez au moins 2 genres musicaux</p>";
			}
		}
		else{
			echo "<p>Sélectionnez au moins 2 genres musicaux</p>";
		}
		return $bool;
		// return true if user selected at least two checkboxes
		// false otherwise
		
	}


	function checkUserName($username){
		global $bdd;
		// checkUserName($username) sends a request to the database to check if the pseudo is or isn't taken
		// return true if the pseudo isn't taken
		// false otherwise

		$bool = false;

		// returned value is initialized to false

		$requete = "SELECT COUNT(*) FROM users WHERE name = '$username'" ;

		$result= $bdd->query($requete);

		// request result
		//$count is an array
		$count = $result->fetch();

		// if the pseudo isn't in the database
		if($count[0] == 0){
			$bool = true;
		}

		return $bool;


	}

	function salage(){
		// goal => creat a random char key 

		// variables
		$abc = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$saltpass = "";
		$num = 0;

		// characters used for the key
		for($i = 0; $i < 10; $i++){
			$num = rand(0, strlen($abc) - 1);
			$saltpass = $saltpass . substr($abc, $num, 1);
		}
		
		return $saltpass;
	}

	function addUser($username, $email, $password, $news){
		// add a new user to the database
		// no value returned
		global $bdd;
			
		$passhach = sha1($password);
		// password hash by sha1 algorithm

		// random key of 10 characters
		$random_key = salage();

		// SQL request
		$chaine = "INSERT INTO users (name, email, password, gets_emails, salt) VALUES (:name, :email, :pass, :news, :psalt)";
		
		//prepare request
		$statement = $bdd->prepare($chaine);

		// bind value and execute query
		$statement->bindvalue(":name", $username, PDO::PARAM_STR);
		$statement->bindvalue(":email", $email, PDO::PARAM_STR);
		$statement->bindvalue(":pass", $passhach, PDO::PARAM_STR);
		$statement->bindvalue(":news", $news, PDO::PARAM_INT);
		$statement->bindvalue(":psalt", $random_key, PDO::PARAM_STR);

		$statement->execute();
		
	}


	function addUserGenres($genres){
		// add selected music genres specific to a user to the database
		// $genres is an array
		global $bdd;
		
		$last_id = $bdd->lastInsertId();
		$chaine = "INSERT INTO users_genres (user_id, genre) VALUES (:id, :genres)";
		
		$statement = $bdd->prepare($chaine);
		$statement->bindValue(":id", $last_id, PDO::PARAM_INT);
		for ($i = 0; $i < count($genres); $i++) {
			$statement->bindValue(":genres", $genres[$i], PDO::PARAM_STR);
			$statement->execute();
		}
		
		$statement->execute(); 
	}

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