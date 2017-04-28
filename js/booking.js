function suivant_transports() {
	$('#li-transport').css("background","green");
	$('#li-transport').css("color","white");
	$('#li-paiement').css("background", "orange");
	$('li-paiement').css('color', "white");
}

function suivant_paiement() {
	$('#li-paiement').css("background","green");
	$('#li-paiement').css("color","white");
	$('#li-validation').css("background", "orange");
	$('li-validation').css('color', "white");
}

function show_arrival(){
	$('#arrival').toggle();	
}

function show_departure(){
	$('#departure').toggle();	
}