<?php
  // URL of the host
  $dbhost = "localhost"; 
  
  // Name of the database
  $dbname = "movie_journey_bdd";
  
  // User name
  $dbuser = "root";
  
  // Password (not used here)
  $dbpass = "";
 
  try {
    $connection = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);
  } catch(PDOException $e) {
    echo $e->getMessage();
  }




  /* checks if user is connected */
  session_start();

  /* checks if user exists */
  if (isset($_SESSION['identifiant']) && isset($_SESSION['mdp'])) {
    // this boolean variable will tell if the user is connected or just a visitor
    $connect = true;
  }else{
    $connect = false;
  }

?>