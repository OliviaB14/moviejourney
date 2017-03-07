// Google Map Api
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var nancy = new google.maps.LatLng(48.6893344, 6.1883330);
var obj;
//1 : 48.8562697, 2.2871275999999625
//6 : 43.20667, 2.36361
//7 : 44.840278, 1.145278
var from = nancy;
var to = new google.maps.LatLng(48.8562697, 2.2871275);
// Event listener to initialize the map once the window has been loaded

google.maps.event.addDomListener(window, 'load', initialize);

function initialize() { 
    directionsDisplay = new google.maps.DirectionsRenderer();
    var mapOptions = {
        zoom: 5,
        center: nancy
    }
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    directionsDisplay.setMap(map);
processPath() 

function processPath() {
    // Build the request
    var request = {
        origin: from,
        destination: to,
        // Note that Javascript allows us to access the constant
        // using square brackets and a string value as its
        // "property."
        travelMode: google.maps.TravelMode["DRIVING"]
    };

    // Send it
    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            // Display the path on the map
            directionsDisplay.setDirections(response);
        }
    });
}
}