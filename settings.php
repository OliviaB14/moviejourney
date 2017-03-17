<?php

  /* ==============================

  session variables -
  email : contains user email
  pass : contains user password 
  fisrtname, lastname

  ============================== */

  

  if(isset($_POST["modif_btn"])){
  	// if user wants to change their infos

  	if(isset($_POST['modifEmail'])){
  		// email change
      modifEmail($_SESSION['email'], $_POST['modifEmail'], $connection);
  		$_SESSION['email'] = $_POST['modifEmail'];
  	}

  	if(isset($_POST['modifPassword'])){
  		// password change
      modifPassword($_SESSION['mdp'], $_POST['modifPassword'], $connection);
  		$_SESSION['mdp'] = $_POST['modifPassword'];
  	}


    // shows a success message to the user
    echo "<div class='row'><div class='alert alert-success' role='alert'>Vos paramètres ont bien été enregistrés.</div></div>";


    // modify user's password in the database
    function modifyPass($oldpass, $newpass, $connection){
      // no value returned

      // get salt key from db
      $req = "SELECT salt from users WHERE '$oldpass' = users.password";
      $query = $bdd->prepare($req);
      $query->execute();
      $salt = $query->fetch();
      // password hash by sha1 algorithm
      $new_password = sha1($newpass) . $salt;
      

      // password change in the db
      $req2 = "UPDATE users SET password = '$new_password'";
      //prepare request
      $statement = $connection->prepare($chaine);
      $statement->execute();
    }

    // modify user's email in the database
    function modifyEmail($oldemail, $newemail, $connection){
      // no value returned

      // password change in the db
      $req = "UPDATE users SET email = '$newemail' WHERE '$oldemail' = users.email";
      //prepare request
      $statement = $connection->prepare($chaine);
      $statement->execute();
    }


  }

?>
