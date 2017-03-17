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
		  <ul class="nav navbar-nav">
	
			<li><a href="index.php">Accueil <span class="sr-only">(current)</span></a></li>
			<li><a href="movies.php">Films</a></li>
			<!-- if user is connected -->
				<?php if($connect){
					echo "<li><a href='usercircuits.php'>Mes circuits</a></li>";
				} else {
					echo "<li><a href='circuit.php'>Sélection de circuits</a></li>";
				} ?>
			<li><a href="contact.php">Contact</a></li>
		  </ul>
		  
		  <ul class="nav nav-stacked navbar-right">
		  <!-- if user is connected : -->
		  	<?php if($connect){ ?>
			<li><a href="deconnexion.php"><img src="image/logout.png" alt=""/>déconnexion</a></li>
			<li><a href="useraccount.php"><img src="image/reglage.png" alt=""/>réglages</a></li>
			<!--endif ./ -->
			<?php } else {?>
			<li id="connexion-button"><button type="button" class="btn btn-default navbar-btn"><a href="account.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mon compte</a></button></li>
			<?php } ?>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</header>