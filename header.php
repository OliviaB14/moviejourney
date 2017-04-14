<link rel="stylesheet" type="text/css" href="css/overlay-bootstrap.min.css"/><!-- overlay stylesheet -->
<link rel="stylesheet" type="text/css" href="css/header.css">


<header>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.php"><img src="image/logo-movie-journey.gif" id="logo" class="img-responsive"/></a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav" id="icon_menu">
	
			<li><a href="index.php">Accueil <span class="sr-only">(current)</span></a></li>
			<li><a href="movies.php">Films</a></li>
			<!-- if user is connected -->
				<?php if($connect){
					echo "<li><a href='circuit.php'>Mes circuits</a></li>";
					echo "<li><a href='selection.php'>La sélection</a></li>";
				} else {
					echo "<li><a href='selection.php'>Sélection de circuits</a></li>";
				} ?>
			<li><a href="contact.php">Contact</a></li>
		  </ul>
		  
		  <ul class="nav nav-stacked navbar-right">
		  <?php if(!$connect){ ?>
		  <!-- if user isn't connected it shows a connection overlay -->
			<a href="#connectionpanel"><li id="connexion-button"><button type="button" class="btn btn-default navbar-btn" onclick="openNav()"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mon compte</button></li></a>
			<?php
		} else { ?>
			<!-- if user is connected, it leads them to their account page -->
			<a href="account.php"><li id="connexion-button"><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mon compte</button></li></a>
		<?php
		}
		?>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</header>


	<!-- The overlay -->
<div id="myNav" class="overlay_div_connect">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
  	<div class="row">
  		<a class="navbar-brand" href="index.php"><img src="image/logo-movie-journey.gif" class="img-responsive"/></a>
  	</div>
  	<div class="row">
  		<div class="col-lg-6 col-lg-offset-3 connection">
		  	<h3>Connexion</h3>
			<form action="connexion.php" method="post" >
				<div class="row form-group">
					<label for="identifier1" class="col-sm-4 control-label">Adresse e-mail</label>
					<div class="col-sm-8">
						<input type="email" name="identifier1" id="identifier1" class="	form-control" placeholder="Adresse e-mail">
					</div>
				</div>
				<div class="row form-group">
					<label for="password1" class="col-sm-4 control-label">Mot de passe</label>
			    	<div class="col-sm-8">
			      		<input type="password" class="form-control" name="password1" id="password1" placeholder="Mot de passe">
			    	</div>
			    </div>
			    <div class="col-sm-8 col-sm-offset-2">
			    	<a href="forgotten.php">Mot de passe oublié ?</a> <a href="create-account.php">Créer un compte</a>
			    </div>
				<div class="form-group connection_btn">
		    		<div class="col-sm-10">
		    			<button type="submit" class="btn btn-default" name="con-btn">Connexion</button>
		    		</div>
		  		</div>
			</form>
		</div>
	</div>
  </div>

</div>

<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript">
	/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

</script>