$(document).ready(function(){ 
    $("#mytabs a").click(function(e){
    	e.preventDefault();
    	$(this).tab('show');
    });
});