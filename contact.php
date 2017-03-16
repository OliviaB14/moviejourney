<?php
  // Connect to the database
  require 'base.php';

  // Character encoding of the database
  $connection->exec("SET NAMES 'utf8'");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
		include('header.php')
		?>
<div class="jumbotron">
	<div class="container">
		<h1>Contact</h1>
		<p>Une question, un avis, une recommandation, dites le nous !</p>
	</div>
</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="tableaudebord">
				<div class='container'>
						<div class="row">
							<div class="col-lg-6 infos">
								<div class="col-lg-12"> 
									<div style="margin-top:40px">
										<p class="infos-blue">Notre équipe est à l'écoute :</p>
										<p>Si vous avez besoin de nous transmettre une opinion, une idée...</p>
										<p>Nous sommes là pour vous apporter toute l'aide dont vous avez besoin.</p>
										<p style="font-weight:700">Nos coordonnées :</p>
										<p class="infos-blue">06.48.87.78.78</p>
										<p class="infos-blue">moviejourney@gmail.com</p>
										<p class="infos-blue">13 rue Michel Ney, 54000 Nancy</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 form">
								<div class="col-lg-12"> 
									<form style="margin-bottom:20px" class="form-horizontal" role="form">
										<div class="form-group row">
											<div class="col-10">
												<input class="form-control" type="text" placeholder="Nom" id="input-nom">
									  		</div>
										</div>
										<div class="form-group row">
											<div class="col-10">
												<input class="form-control" type="text" placeholder="Prénom" id="input-prenom">
									  		</div>
										</div>
										<div class="form-group row">
											<div class="col-10">
												<input class="form-control" type="text" placeholder="Email" id="input-email">
									  		</div>
										</div>
										<div class="form-group row">
											<div class="col-10">
												<input class="form-control" type="text" placeholder="Votre message" id="input-message">
									  		</div>
										</div>
										<button type="submit" class="btn btn-primary">Envoyer</button>
									</form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
		include('footer.php')
		?>
</body>
</html>