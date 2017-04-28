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
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<!-- main stylesheet -->
		<link rel="stylesheet" href="css/booking.css" type="text/css" />
		<link rel="stylesheet" href="css/account.css" type="text/css" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker3.standalone.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
		<!-- google fonts -->

		<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

		<title>Réserver mon séjour - Movie Journey</title>
		<link rel="icon" type="image/png" href="image/favicon.png" />
	</head>

	<body>
		<!-- header -->
		<?php include('header.php'); ?>

		<!-- MAIN CONTAINER : all page is contained -->
		<div class="container-fluid">
			 <!-- Nav tabs -->
			 <div id="container-menu-reservation" class="row">
				  <ul class="nav nav-tabs menu-reservation" role="tablist">
					<li id="li-transport" class="active" role="presentation">1.Réservation</li>
					<li id="li-paiement" role="presentation">2.Paiement</li>
					<li id="li-validation" role="presentation">3.Confirmation</li>
				  </ul>
		  	</div>
		
		  <!-- Tab panes -->
		    <div class="row">
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="transport">
					<h5>Veuillez choisir votre mode de transport</h5>
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option2" autocomplete="off">Avion
					  </label>
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option3" autocomplete="off">Train
					  </label>
					</div>
		


				    <form class="form-horizontal">
				        <div class="control-group">
				          <label class="control-label" for="from">Aller</label>
				          <div class="controls">
				            <input type="text" id="from" onclick="show_departure()"/>
				          </div>
				        </div>
				        <div class="control-group">
				          <label class="control-label" for="to">Retour</label>
				          <div class="controls">
				            <input type="text" id='to' onclick="show_arrival()"/>
				          </div>
				        </div>
				    </form>

				    <div class="btn-group row" data-toggle="buttons" id="departure">
						<h5>Veuillez choisir votre vol 'aller'</h5>
						
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option1" autocomplete="off"><label class="lab1">Luxembourg - Paris</label><br><label class="lab2">Lux - Airport</label><br> <label class="lab3">06:30 - 07:37</label><br><label class="lab4">129€</label> 
					  </label>
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option2" autocomplete="off"><label class="lab1">Luxembourg - Paris</label><br><label class="lab2">Lux - Airport</label><br> <label class="lab3">11:45 - 13:02</label><br><label class="lab4">147€</label>
					  </label>
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option3" autocomplete="off"><label class="lab1">Luxembourg - Paris</label><br><label class="lab2">Lux - Airport</label><br> <label class="lab3">14:30 - 15:24</label><br><label class="lab4">169€</label> 
					  </label>
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option4" autocomplete="off"><label class="lab1">Luxembourg - Paris</label><br><label class="lab2">Lux - Airport</label><br> <label class="lab3">16:10 - 18:23</label><br><label class="lab4">134€</label> 
					  </label>
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option5" autocomplete="off"><label class="lab1">Luxembourg - Paris</label><br><label class="lab2">Lux - Airport</label><br> <label class="lab3">19:55 - 22:47</label><br><label class="lab4">107€</label>
					  </label>
					</div>
					<br>
					<div class="btn-group" data-toggle="buttons" id="arrival">
						<h5>Veuillez choisir votre vol 'retour'</h5>
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option1" autocomplete="off"><label class="lab1">Paris - Luxembourg</label><br><label class="lab2">Charles de Gaulle</label><br> <label class="lab3">07:45 - 09:04</label><br><label class="lab4">167€</label> 
					  </label>
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option2" autocomplete="off"><label class="lab1">Paris - Luxembourg</label><br><label class="lab2">Paris - Orly</label><br> <label class="lab3">07:50 - 09:47</label><br><label class="lab4">121€</label>
					  </label>
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option3" autocomplete="off"><label class="lab1">Paris - Luxembourg</label><br><label class="lab2">Charles de Gaulle</label><br> <label class="lab3">14:10 - 15:24</label><br><label class="lab4">134€</label> 
					  </label>
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option4" autocomplete="off"><label class="lab1">Paris - Luxembourg</label><br><label class="lab2">Paris-Beauvais</label><br> <label class="lab3">16:10 - 18:23</label><br><label class="lab4">124€</label> 
					  </label>
					  <label class="btn btn-primary">
						<input type="radio" name="options" id="option5" autocomplete="off"><label class="lab1">Paris - Luxembourg</label><br><label class="lab2">Paris-Beauvais</label><br> <label class="lab3">22:45 - 00:12</label><br><label class="lab4">104€</label>
					  </label>
					</div>



				    <div id="price">
				    	
				    </div>

					<nav aria-label="...">
					  <ul class="pager">
						<li class="next"><a href="#paiement" aria-controls="paiement" role="tab" data-toggle="tab" onclick="suivant_transports()">Suivant<span aria-hidden="true">&rarr;</span></a></li>
					  </ul>
					</nav>
				</div>
				<div role="tabpanel" class="tab-pane" id="paiement">
					<h5>Paiement</h5>
					
				<div class="row">
  		<div class="col-lg-6 col-lg-offset-3">
			<form>
				<div class="row form-group">
					<label class="col-sm-4 control-label">Nom du passager</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" placeholder="Nom">
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-4 control-label">Adresse e-mail</label>
					<div class="col-sm-8">
						<input type="email" class="form-control" value="<?php echo $_SESSION['identifiant']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<label class="col-sm-4 control-label">Carte de paiement</label>
			    	<div class="col-sm-8">
			      		<input type="text" class="form-control" placeholder="XXXX XXXX XXXX XXXX">
			    	</div>
			    </div>
			    <div class="row form-group">
					<label class="col-sm-4 control-label">Date d'expiration</label>
			    	<div class="col-sm-8">
			      		<input type="text" class="form-control" placeholder="MM/YY">
			    	</div>
			    </div>
			    <div class="row form-group">
					<label class="col-sm-4 control-label">Cryptogramme</label>
			    	<div class="col-sm-8">
			      		<input type="text" class="form-control" placeholder="XXX">
			      		<p class="help-block">Situé au dos de votre carte</p>
			    	</div>
			    </div>
			    <div class="col-sm-8 col-lg-offset-4">
			    	<p class="bg-info">Je certifie l'exactitude de ces informations et accepte les <a href="cgv.php" target="_blank">conditions généréales de vente</a> du site Movie Journey</p>
			    </div>
				<div class="form-group">
		    		<div class="col-sm-10">
		    			<a href="#validation" aria-controls="validation" role="tab" data-toggle="tab" onclick="suivant_paiement()"><p class="btn btn-default">Payer</p></a>
		    		</div>
		  		</div>
			</form>
		</div>

		<div class="row">

		</div>

				</div>
					<nav aria-label="...">
						<ul class="pager">
							<li class="previous"><a href="#transport" aria-controls="transport" role="tab" data-toggle="tab" ><span aria-hidden="true">&larr;</span>Retour</a></li>
							
						</ul>
					</nav>
				</div>
				<div role="tabpanel" class="tab-pane" id="validation">
					<h5>Réservation effectuée</h5>
					<h5>Vous recevrez confirmation de votre transaction par email</h5>
					<a href="circuit.php" id="reserver" class="col-xs-7 col-xs-offset-3"><button class="btn btn-default col-xs-12">Nouvelle réservation <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button></a>
					
					
				</div>
			  </div>
		    </div>
			
		</div>

		<!-- footer -->
		<?php include('footer.php'); ?>

		<!-- script files -->
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/booking.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>




		<script type="text/javascript">
			$("#from").datepicker({
			  dateFormat: 'dd/mm/yy',
			  minDate: '1',//min date set to next day
			  onClose: function(dateStr) {
			    var d = $.datepicker.parseDate('dd/mm/yy', dateStr), //get selected date
			        date2 = $('#from').datepicker('getDate'),//get selected date
			        years = 1 //how many years add to selected date
			    d.setFullYear(d.getFullYear() + years); //add x years to selected date 
			    date2.setDate(date2.getDate()+1);//add x days to selected date
			    $('#to').datepicker('change','minDate', date2);//set to date atleast x days from selecteed date
			    $('#to').datepicker('change',"maxDate", d);//set max date to be exactly x year(s) from selected date
			    }
			});
			$("#from").datepicker("setDate", "1");//Set date x day(s) from current date and display it in input field. Needs to be done after initialization of datepicker.
			  
			$("#to").datepicker({
			  dateFormat: 'dd/mm/yy',
			  minDate: '+2d',//Set date x days from today
			  maxDate: '+1y +1d'//max date x year + 1 day
			});

		</script>

		<script type="text/javascript">
			
		</script>
	</body>
</html>