// JavaScript Document


function ajoutfavoris(lieu, prop){ //APPEL AJAX : 
	$.get(
		'addFavorite.php',  //Nous redirige vers le fichier php
		{
			id_lieu : lieu,
			proposition : prop
		} 
	);
	if (prop === 'lieu') {
		$("#add_fav").css("background","pink");
		$(".fav-1").text("Ce lieu vient d'être ajouté à vos favoris !");
		$(".fav-2").text("");
		$("#add_fav").addClass('button-fav-pink');
	} else {
		$("#add_fav").css("background","pink");
		$("#add_fav").addClass('button-fav-pink');
	}
}

function supprfavoris(lieu, prop){ //APPEL AJAX : 
	$.get(
		'delFavorite.php',  //Nous redirige vers le fichier php
		{
			id_lieu : lieu,
			proposition : prop
		}
	);
	if (prop === 'lieu') {
		$( "#add_fav" ).css("background","white");
		$(".fav-1").text("Ce lieu vient d'être supprimé de vos favoris !");
		$(".fav-2").text("Vous pouvez le réajouter à tout moment !");
	} else {
		$( "#add_fav" ).css("background","white");
	}

}