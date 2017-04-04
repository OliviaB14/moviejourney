// JavaScript Document

var prelat;
var prelong;
	
//Conditions si la géolocalisation ne marche pas à faire
	
function init_map(){
	//we create the map
	var myOptions = {
		zoom:3,center:new google.maps.LatLng(48.6896172,6.1740439),
		mapTypeId: google.maps.MapTypeId.HYBRID
	};
	map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
	//with the geolocalisation, we indicate to our user where he is
	GMaps.geolocate({
		success: function(position){
		  	marker = new google.maps.Marker({
				map: map, 
				draggable: true, 
				animation: google.maps.Animation.DROP, 
				position: new google.maps.LatLng(position.coords.latitude,position.coords.longitude),
				title: 'Votre position',
				icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
			});
			//we attribute to our variable the coordinates of the user
			prelat = position.coords.latitude;
			prelong = position.coords.longitude;
	    }
	});
}	

function itineraire(nom,lat,long) {
	var directionsService = new google.maps.DirectionsService();
	var directionsDisplay = new google.maps.DirectionsRenderer({map:map});
	GMaps.geolocate({
		success: function(position){
			marqueurEtape(nom,lat,long);
			lieuproxi(lat,long)
			// we are using coordinate used before and those of our current place in order to create an itineraries
			var request = {
				origin: new google.maps.LatLng(prelat,prelong),
				destination: new google.maps.LatLng(lat,long),
				travelMode: google.maps.DirectionsTravelMode.DRIVING,
				unitSystem: google.maps.DirectionsUnitSystem.METRIC
			};
			directionsService.route(request, function(response, status) {
				if (status == google.maps.DirectionsStatus.OK) {
					directionsDisplay.setDirections(response);
					directionsDisplay.setOptions({
						polylineOptions:{strokeColor:'#FF0004'},
						preserveViewport: false,
						suppressMarkers: true
					});
				}
			});
			//we assigned new coordinates to prelat and prelong
			prelat = lat;
			prelong = long;
		}
	});
}

function marqueurEtape(nom,lat,long) {
	marker = new google.maps.Marker({
		map: map, 
		draggable: true, 
		animation: google.maps.Animation.DROP, 
		position: new google.maps.LatLng(lat,long),
		title: nom,
		icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
	});
	google.maps.event.addListener(marker, 'click');
}

function lieuproxi(lat,long) {
	$.get(
		'lieuProximite.php',  //Nous redirige vers le fichier php
		{
			latitude : lat,
			longitude : long
		},
		function(data) { //Fonction qui prend en argument le résultat de la page php automatiquement
			$('#favorite').css('background','green');
			if (data === 'oui') {
				$('#favorite').css('background','green');
			}	else {
				$('#favorite').css('background','red');
			}
		}
	);
}

function marqueurProxi(nom, lat, long) {
	marker = new google.maps.Marker({
		map: map, 
		draggable: true, 
		animation: google.maps.Animation.DROP, 
		position: new google.maps.LatLng(lat,long),
		title: nom,
		icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
	});
	google.maps.event.addListener(marker, 'click');
}
