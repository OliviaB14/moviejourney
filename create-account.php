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
		include('header.php');
$fnameErr =$lnameErr = $mailErr = $confmailErr =$mdpErr =$confmdpErr = $existEmailErr=$typesErr=""; //only if the user makes a mistake
	$champOk = true;
	//All the conditions above are checking if the user made a mistake
	if(!isset($_POST['lastname'])){
		$lnameErr = "* Entrez un nom."; 
		$champOk=false;
	}

	if(!isset($_POST['firstname'])){
		$fnameErr = "* Entrez un prénom.";
		$champOk=false;
	}

	if(!isset($_POST['password']) || strlen($_POST['password'])<8){
		$mdpErr = "* Le mot de passe doit contenir au moins 8 caractères.";
		$champOk=false;
	} 
	
	if(isset($_POST['password']) and isset($_POST['confPassword'])){
		if(strcmp($_POST["password"],$_POST["confPassword"])!==0){
			$confmdpErr = "* Les mots de passes ne sont pas identiques.";
			$champOk=false;
		}
	}
	
	if(isset($_POST['email'])){
		if (!strstr($_POST['email'],"@") or (!strstr($_POST['email'],"."))){
			$mailErr = "* Email invalide (ne contient pas de @ ou de .)";
			$champOk=false;
		}
		if(isset($_POST['email']) and isset($_POST['email1'])){
			if(strcmp($_POST["email"],$_POST["email1"])!==0){
				$confmailErr = "* Les adresses email ne sont pas identiques.";
				$champOk=false;
			}
		}
		if ($champOk){
			if (checkemail($_POST['email'])==false){
				$existEmailErr = "* L'email est déjà pris !";
				$champOk=false;
			}
		}
	}

	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$mdp = $_POST['password'];
	$email = $_POST['email'];
	$birth_date = $_POST['birthdate'];
	if (isset($_POST['gets_emails'])){
		$gets_emails =1;
	}else{
		$gets_emails =0;
	}
	if (!isset($_POST['types']) || sizeof($_POST['types']) < 2){
		$typesErr= "* Sélectionnez au moins 2 types.";
		$champOk=false;
	}
	//And if everything is valid, then the account is added to the database
	if ($champOk){
		echo "<p> Vos données ont été validées par le serveur.</p>";
		$userid = addUser($lastname,$firstname,$birth_date,$email,$gets_emails,$mdp);
		addUserGenres($userid,$_POST['type']);
	}
	?>

	<!-- MAIN CONTAINER : all page is contained -->
	<div class="container-fluid">



		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 col-xs-12" id="subscription">
				<h3>Créer mon compte</h3>
				  <div class="panel">
				    <form class="form-horizontal" method="POST" action="create-account.php">
				      <div class="form-group"> <!-- first name -->
				      	<span class="error"> <?php echo $fnameErr;?></span>
					    <label for="firstname" class="col-sm-3 control-label">Prénom*</label>
					    <div class="col-sm-4">
					      <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prénom">
					    </div>
					    <span class="error"> <?php echo $lnameErr;?></span>
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
					    <label for="email" class="col-sm-3 control-label">Adresse e-mail*</label>
					    <span class="error"> <?php echo $mailErr;?> </span>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" name="email" id="email" placeholder="Email"
					      <?php
					      	// if the user has begin fulfill the account.php page to subscribe, it will get its infos in this advanced subscription form
					      	if(isset($_POST['email'])){
					      		echo "value='".$_POST['email']."'";
					      	}
					      ?>
					      >
					    </div>
					  </div>
					  <div class="form-group"> <!-- email address confirmation -->
					    <label for="email3" class="col-sm-3 control-label"></label>
					    <span class = "error"><?php echo $existEmailErr;?></span>
					    <span class="error"><?php echo $confmailErr;?></span>
					    <div class="col-sm-9">
					      <input type="email" class="form-control" name="email1" id="email1" placeholder="Confirmer votre adresse e-mail"
					      <?php
					      	// if the user has begin fulfill the account.php page to subscribe, it will get its infos in this advanced subscription form
					      	if(isset($_POST['email1'])){
					      		echo "value='".$_POST['email1']."'";
					      	}
					      ?>
					      >
					    </div>
					  </div>
					  <div class="form-group"> <!-- choosen password -->
					    <label for="password" class="col-sm-3 control-label">Mot de passe*</label>
					    <span class="error"> <?php echo $mdpErr;?></span>
					    <div class="col-sm-9">
					      <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
					    </div>
					  </div>
					  <div class="form-group"> <!-- password confirmation -->
					    <label for="confPassword" class="col-sm-3 control-label"></label>
					    <span class="error"> <?php echo $confmdpErr;?></span>
					    <div class="col-sm-9">
					      <input type="password" class="form-control" name="confPassword" id="confPassword" placeholder="Confirmer le mot de passe">
					    </div>
					  </div>
					  <div class="form-group"> <!-- gets-email -->
					    <label for="gets-email" class="col-sm-3 control-label"></label>
					    <div class="col-sm-9">
					      <input type="checkbox" class="form-control" name="gets_emails" id="gets_emails" >
					      <label> En cliquant ici, vous acceptez de recevoir des e-mails de la part de Movie Journey. </label>
					    </div>
					  </div>
					  <div class="form-group"> <!-- user's favorite movie types -->
					    <label for="genres" class="col-sm-3 control-label"></label>
					    <span class="error"> <?php echo $typesErr;?></span>
					    <div class="col-sm-12 movie_genres">
					    	<p class="col-sm-3">Choisissez vos genres de films préférés :</p>
					    	<div class="col-sm-9">
					    	<?php

					    	$query = requete_bdd($connection, "SELECT type FROM type");
							$query->execute();

							$row = $query->fetchAll();
							foreach($row as $key => $value) {
								echo "<input type='checkbox' value='" .$value['type']. "' name= 'types[]'> <label>" .$value['type']."</label> ";
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


// define variables and set to empty values

	function checkemail($email){
		//Checks if the mail is in the database
		global $connection;
		$req = "SELECT COUNT(*) AS count FROM users WHERE email= '$email'";
	    $statement = $connection->prepare($req);
	    $statement->bindValue(":email", $email, PDO::PARAM_STR);
	    $statement->execute();
	    $row = $statement->fetch(PDO::FETCH_ASSOC);
	    return $row["count"] == "0";
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

	function addUser($lastname,$firstname,$birth_date, $email, $gets_emails,$password){
		// add a new user to the database
		// no value returned
		global $connection;
			
		$passhach = sha1($password);
		// password hash by sha1 algorithm

		// random key of 10 characters
		$psalt = salage();

		// SQL request

		$chaine = "INSERT INTO users (lastname, firstname, birth_date, email, gets_email, password, salt) VALUES (:lastname, :firstname, :birth_date, :email, :gets_emails, :password, :psalt)";
		//prepare request
		$statement = $connection->prepare($chaine);

		// bind value and execute query
     	$statement->bindvalue(":lastname", $lastname, PDO::PARAM_STR);
		$statement->bindvalue(":firstname", $firstname, PDO::PARAM_STR);
		$statement->bindvalue(":birth_date", $birth_date, PDO::PARAM_STR);
		$statement->bindvalue(":email", $email, PDO::PARAM_STR);
		$statement->bindvalue(":gets_emails", $gets_emails, PDO::PARAM_STR);
		$statement->bindvalue(":password", $passhach, PDO::PARAM_STR);
		$statement->bindvalue(":psalt",$psalt, PDO::PARAM_STR);
		$statement->execute();

		$userid="SELECT id FROM users WHERE email ='$email'";
		return $userid;
		//return the id to add it in userstypes 

	}


	function addUserGenres($id, $type){
		// add selected movie genres specific to a user to the database
		// $type is an array
		global $connection;
		
		$last_id = $connection->lastInsertId();
		$chaine = "INSERT INTO userstypes (user_id, type_id) VALUES (:id, :type_id)";
		$statement = $connection->prepare($chaine);
		$statement->bindValue(":id", $id, PDO::PARAM_INT);
		for ($i = 0; $i < count($type); $i++) {
			$statement->bindValue(":type", $type[$i], PDO::PARAM_STR);
			$statement->execute();
		}
		
		$statement->execute(); 
	} 

		function requete_bdd($connection, $req){
			/* will return all data from the database as json data
				
				------- ARGUMENTS
				$req is a string
				$connection is the database
			*/
			
			$query = $connection->prepare($req);
			return $query;
			/* returned variable is an pdo object */
		}


	?>

	</body>
</html>