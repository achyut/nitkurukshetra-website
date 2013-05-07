<?php
	include("../template/adminheader.php");
	
?>
<style type="text/css">
#slideshow {
    position:relative;
    height:350px;
}

#slideshow IMG {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
}

#slideshow IMG.active {
    z-index:10;
}

#slideshow IMG.last-active {
    z-index:9;
}

</style>
<div id="slideshow" class="slideShowContainer">
	<IMG src="../images/pic4.jpg" class="active" />
	<IMG src="../images/pic6.JPG" />
	<IMG src="../images/pic3.jpg" />
	<IMG src="../images/pic1.jpg" />
</div>
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
<script type="text/javascript" src="script1.js"></script>
