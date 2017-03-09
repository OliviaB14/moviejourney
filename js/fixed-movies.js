// JavaScript Document
$(window).scroll(function(){

  var target = $(window).scrollTop();
  var alturaA = $('.container-fluid').offset().top;
  var alturaB = alturaA + $('.container-fluid').height() - 32 - $('#nav-recherche-film').height();
  
     console.log(target + ' ' + alturaA + ' ' + alturaB);
    if(target > alturaB){
       $('#nav-recherche-film').css('margin-top', ( alturaB - alturaA ) + 'px');
    } else if( target > alturaA && target < alturaB) {
       $('#nav-recherche-film').css('margin-top', ( target - alturaA ) + 'px');
    } else {
       $('#nav-recherche-film').css('margin-top','0');
    }
});