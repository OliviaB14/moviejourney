/**
  * Basic Map
  */
var map;
$(document).ready(function(){
  var map = new GMaps({
    el: '#geolocation_map',
    lat: 48.6896172,
    lng: 6.1740439,
    zoom:8
  });
  GMaps.geolocate({
    success: function(position){
      map.setCenter(position.coords.latitude, position.coords.longitude);
       map.drawRoute({
        origin: [position.coords.latitude, position.coords.longitude],
        destination: [51.5073346, -0.1276831],
        travelMode: 'driving',
        strokeColor: 'blue',
        strokeOpacity: 0.6,
        strokeWeight: 6
      });
    },
    error: function(error){
      alert('Geolocation failed: '+error.message);
    },
    not_supported: function(){
      alert("Your browser does not support geolocation");
    }
  });
});