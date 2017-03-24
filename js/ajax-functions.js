$(document).ready(function(){

	function getMovieName(){
		var movie = $("#moviePropose").val();
		return (movie);
	}


	function textchange(){
    	return "Votre film a bien été transmis à l'équipe de Movie Journey !";
    }

    $("#propose_a_movie").click(function(){
    	var movie = getMovieName();
    	
        $.ajax({success: function(result){
            $("#message").html(textchange());
        }});
    });
});