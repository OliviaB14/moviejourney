$(document).ready(function() {
	$('#suggestions_carousel').carousel({
		interval: 10000
	})
    
    $('#suggestions_carousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});
    
    
});

