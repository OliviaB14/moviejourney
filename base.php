<?php
  // URL of the host
  $dbhost = "localhost"; 
  
  // Name of the database
  $dbname = "movie_journey_bdd";
  
  // User name
  $dbuser = "ascgukp";
  
  // Password (not used here)
  $dbpass = "qwsefvgy7uk";
 
  try {
    $connection = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
?>