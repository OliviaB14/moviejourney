// JavaScript Document

var prelat;
var prelong;
var step = 0;
	
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
	step++;
	if (step === 1) {
		$('#step').html('<h3>Vos étapes</h3>');
	}
	$('#step').html($('#step').html()+"<h4 class='placestep'>"+step+".  "+nom+"</h4>");
	var directionsService = new google.maps.DirectionsService();
	var directionsDisplay = new google.maps.DirectionsRenderer({map:map});
	GMaps.geolocate({
		success: function(position){
			marqueurEtape(nom,lat,long);
			lieuproxi(nom, lat,long)
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

function lieuproxi(nom, lat,long) {
	$.ajax({
        url: "lieuProximite.php",
        type: "GET",
        data : "latitude=" + lat + "&longitude=" + long,
        dataType: "json", // lowercase is always preferered though jQuery does it, too.
        success: function(returnData){
			var name_place = nom;
			var i = 0;
			while (i < returnData.length) {
				if ( returnData[i] === name_place) {
					i += 4;
				} else {
					nom = returnData[i];
					i++;
					lat = returnData[i];
					i++;
					long = returnData[i];
					i++;
					var image = returnData[i];
					i++;
					marqueurProxi(nom,lat,long,image);
				}
			}
		},
		error : function(returnData, statut, erreur){
			console.log(erreur);
        },
        complete : function(returnData, statut){
        }
	});
}

function marqueurProxi(nom, lat, long, image) {
	marker = new google.maps.Marker({
		map: map, 
		draggable: true, 
		animation: google.maps.Animation.DROP, 
		position: new google.maps.LatLng(lat,long),
		title:nom,
		icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
	});
	
	var contenuInfoBulle =	"<h3>" + nom + "</h3>"  + "<img id='" + nom + "' src='" + image + "' title='" + nom + "' />" + "<span><a href='place.php?place=" + nom + "'>Découvrir ce lieu</a></span>";
	var infoBulle = new google.maps.InfoWindow({
		content: contenuInfoBulle
	})
	
	google.maps.event.addListener(marker, 'click', function() {
		infoBulle.open(map, marker);
	});
}
