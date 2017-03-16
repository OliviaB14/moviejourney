// Google Map Api
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var nancy = new google.maps.LatLng(48.6893344, 6.1883330);
var obj;
//1 : 48.8562697, 2.2871275999999625
//6 : 43.20667, 2.36361
//7 : 44.840278, 1.145278
var from = "";
var to = "";
var waypoints=[];
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
    to="";
    from="";
    waypoints=[];
}


function processPath() {
  var waypoints = [];
  var checkboxArray = waypoints;
  for (var i = 0; i < checkboxArray.length; i++) {
    if (checkboxArray.options[i].selected) {
      waypoints.push({
        location: checkboxArray[i].value,
        stopover: true
      });
    }
  }
  directionsService.route({
        origin: from,
        destination: to,
        waypoints: waypoints,

        // Note that Javascript allows us to access the constant
        // using square brackets and a string value as its
        // "property."
        travelMode: google.maps.TravelMode["DRIVING"]
    },function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            // Display the path on the map
		      directionsDisplay.setDirections(response);
		      var route = response.routes[0];
		      var summaryPanel = document.getElementById('directions-panel');
		      summaryPanel.innerHTML = '';
		      // For each route, display summary information.
		      for (var i = 0; i < route.legs.length; i++) {
		        var routeSegment = i + 1;
		        summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
		            '</b><br>';
		        summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
		        summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
		        summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
		      }
        }
        document.getElementById('distspan').innerHTML = (response.routes[0].legs[0].distance.value /1000)  + " kilomètres";
    });
}


$("li").click(function () {
    pointtype = $(this).parent().parent().parent().attr("id");
    if (!(pointtype == undefined)){
        lat = this.getAttribute("lat");v
        lng = this.getAttribute("long");
        if (from==""){
            from = new google.maps.LatLng(lat, lng);
    // Build the request
            document.getElementById("fromspan").innerHTML = $(this).text()
        } else if (from !="" && to ==""){
            to = new google.maps.LatLng(lat, lng);
            document.getElementById("tospan").innerHTML = $(this).text()
        } else {
        	waypoints.push(new google.maps.LatLng(lat,lng));
        	if (waypoints.length==1){
				document.getElementById("byspan").innerHTML = $(this).text()
			} else {
				document.getElementById("byspan").innerHTML += ", "+$(this).text()
			}
        }
    }
    if ((from != "") && (to != "")) {
    	document.getElementById('submit').addEventListener('click', function() {
    		processPath();
    	});
    }
});