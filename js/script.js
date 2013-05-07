$(document).ready(function(){
	/*$("#slideShow").slidesjs({
        width: 940,
        height: 300,
        play: {
          active: false,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
      */
      $('#slider').hslide();
function tick(){
	$('#ticker li:first').slideUp( function () { $(this).appendTo($('#ticker')).slideDown(); });
}
setInterval(function(){ tick () }, 3000);


$('ul#menu li').hover(function(){
        //$('#drop' , this).css('display','block');
         $(this).children('ul').delay(20).slideDown(200);
    }, function(){
         $(this).children('ul').delay(20).slideUp(200);
    });
});


