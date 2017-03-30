// JavaScript Document

function ajoutfavoris(lieu, prop){ //APPEL AJAX : 
	console.log(prop);
	console.log(lieu);
	$.get(
		'addFavorite.php',  //Nous redirige vers le fichier php
		{
			id_lieu : lieu,
			proposition : prop
		}					//Fonction qui prend en argument le résultat de la page php automatiquement
	);
	$("#add_fav").css("background","pink");
	$(".fav-1").text("Ce lieu vient d'être ajouté à vos favoris !");
	$(".fav-2").text("");
	$("#add-fav").addClass('button-fav-pink');
};

function supprfavoris(lieu, prop){ //APPEL AJAX : 
	$.get(
		'delFavorite.php',  //Nous redirige vers le fichier php
		{
			id_lieu : lieu,
			proposition : prop
		}					//Fonction qui prend en argument le résultat de la page php automatiquement
	);
	$( "#add_fav" ).css("background","white");
	$(".fav-1").text("Ce lieu vient d'être supprimé de vos favoris !");
	$(".fav-2").text("Vous pouvez le réajouter à tout moment !");
};