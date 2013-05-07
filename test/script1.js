$(document).ready(function(){
 setInterval("slideSwitch()",2000);
});

function slideSwitch() {
	var $active = $('#slideshow IMG.active');
	
	var $next = $active.next();    
	$next.addClass('active');
	$active.removeClass('active');
}

