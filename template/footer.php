	<div class="clear"></div>
	<div class="footer pageBg centerBox"><a href="http://14.139.60.11/index5.aspx">Old Website</a> |&nbsp;&nbsp;<a href="institute.php?page=121">Other NITs</a> |&nbsp;&nbsp;<a href="institute.php?page=69">Disclaimer</a> |&nbsp;&nbsp;<a href="institute.php?page=71">Phone Directory</a> |&nbsp;&nbsp;<a href="institute.php?page=70">Contact Us</a>|&nbsp;&nbsp;<a href="institute.php?page=120">Feedback</a>|&nbsp;&nbsp;<a href="institute.php?page=176">Resources</a><br><br/>
  <span class="copyright">&copy;</span>2013 All Rights Reserved, NIT Kurukshetra-136119, India </div>
	</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Strait|Sintony" />
<script type="text/javascript" src="js/jquery.hslide.min.js"></script> 
<script type="text/javascript">
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
</script>
</body>
</html>
<?php
mysql_close($link);
?>
