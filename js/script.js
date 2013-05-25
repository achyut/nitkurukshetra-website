$(document).ready(function(){
      $('#slider').hslide();
function tick(){
	$('#ticker li:first').slideUp( function () { $(this).appendTo($('#ticker')).slideDown(); });
}
setInterval(function(){ tick () }, 3000);
	$("#menu ul.child").removeClass("child");
	$("#menu ul.grandchild").removeClass("grandchild");
	$("#menu li").has("ul").hover(function(){
		$(this).addClass("current").children("ul").fadeIn();
	}, function() {
		$(this).removeClass("current").children("ul").stop(true, true).css("display", "none");
	});
});


