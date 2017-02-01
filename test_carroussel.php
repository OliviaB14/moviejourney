<?php 
/*
mise en place de la requête SQL en fonction de si l'utilisateur est connecté ou pas
pour un utilisateur connecté, la requête va récupérer ses préférences (genre des films préférés?) et faire une jointure les lieux cultes associés
pour un utilisateur qui n'est pas connecté, la requête se contente de récupérer des images de lieux cultes
*/
  if (isset($_SESSION["genres"])){
    $sql = 'SELECT backdrop_path,series.id,series.name FROM series INNER JOIN seriesgenres ON series.id=seriesgenres.series_id INNER JOIN genres ON seriesgenres.genre_id=genres.id WHERE ';  
    for ($i=0; $i < count($_SESSION["genres"]) ; $i++){
      $sql.=" genres.name LIKE \"";
      $sql.=$_SESSION["genres"][$i];
      if($i+1<count($_SESSION["genres"])){
        $sql.="\" OR ";
      }
      else{ 
        $sql.="\";";
      }
    }
  }
  else{
    $sql = 'SELECT backdrop_path,series.id,series.name FROM series;';  
  }

  // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
  $req = $connection->prepare($sql); 
  $req->execute();
  $rows = $req->fetchAll();
?>

<div id="myCarousel" class="carousel slide panel-body" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                <!-- on récupère aléatoirement un lieu dans la base de données puis on affiche l'image qui y est associée -->
                <?php
                $ligne = $rows[rand(0,sizeof($rows))];?>
                <!-- une fois qu'on a récupéré le lieu, on l'affiche dans le carroussel avec un lien menant à la page du lieu et l'image correspondante -->
                <a href="script/lieuxcultes.php?id=<?php echo $ligne['id'];?>"><img src="" alt="<?php echo $ligne['lieu.nom']?>;"></a>
                </div>
                <!-- on réitère cette action 4 fois de suite -->
                <div class="item">
                  <?php
                $ligne = $rows[rand(0,sizeof($rows))];?>
                <a href="script/lieuxcultes.php?id=<?php echo $ligne['id'];?>"><img src="" alt="<?php echo $ligne['lieu.nom']?>;"></a>
                </div>

                <div class="item">
                  <?php
                $ligne = $rows[rand(0,sizeof($rows))];?>
                <a href="script/lieuxcultes.php?id=<?php echo $ligne['id'];?>"><img src="" alt="<?php echo $ligne['lieu.nom']?>;"></a>
                </div>

                <div class="item">
                  <?php
                $ligne = $rows[rand(0,sizeof($rows))];?>
                <a href="script/lieuxcultes.php?id=<?php echo $ligne['id'];?>"><img src="" alt="<?php echo $ligne['lieu.nom']?>;"></a>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>