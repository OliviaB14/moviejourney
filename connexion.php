<?php 
	
	require('base.php');

	if(isset($_POST) && !empty($_POST['identifier1']) && !empty($_POST['password1'])) {
	  extract($_POST);
	  // on recupère le mot de passe de la table qui correspond à l'identifiant du visiteur
	  $sql = "SELECT password FROM users WHERE email='".$identifier1."'";
	  $req = $connection->query($sql);
	  $data = $req ->fetch();

	  if(sha1($password1)!=$data['password']) {
	  	header('account.php'); // On renvoie sur la page de connexion pour que le visiteur retente sa connection
		exit;
	  }
	  else {
	    session_start(); //Démarre une session (c'est ce qui va établir la connection entre chaque page)
	    $_SESSION['identifiant'] = $_POST['identifier1'];
	    $_SESSION['mdp'] = $_POST['password1'];
	    //On récupère l'identifiant et le mdp dans des variables SUPERGLOBALES
	    
	    header('location: account.php'); 
	    exit;
	    // renvoie directement vers l'index
	  }    
	}
	else {
	  header('location: account.php');
	   //Renvoie à la page de connexion si rien n'a été entré 
	}
