<?php
	$_GET['page'] = 0;
	include("template/header.php");
?>
	<div id="slider" class="slideShowContainer">
		<div><a href="sites/old/index1.html"><img src="images/golden.jpg" /></a></div>
		<div><img src="images/pic4.jpg" /></div>
		<div><img src="images/pic7.jpg" /></div>	
		<div><img src="images/pic3.jpg" /></div>
		<div><img src="images/pic1.jpg" /></div>
		<div><img src="images/NITKKR_HOSTEL.jpg" /></div>
		<div><img src="images/pic9_1.jpg" /></div>
		<div><img src="images/pic7_1.jpg" /></div>
		
	</div>

	<div class="belowContainer">
			<div class="marquee centerBox"><span class="latestText">INFORMATIONS:</span>
			<ul class="marqueeNews">
			<marquee>
				<?php
					getResults("scrollnews","scrollnews","scroll_",5,"long","false",true);
				?>
			</marquee>
			</ul>
			<ul class="archieve">
				<li><a href="photogallery.php"><img src="images/gallery.png" width="25px" height="25px" />&nbsp;&nbsp;PHOTOS</a></li>
				<li><a href="notices.php?type=archieve"><img src="images/archieve.png" width="25px" height="25px" />&nbsp;&nbsp;ARCHIEVE</a></li>				
			</ul>
		</div>
		
		<ul class="belowTopics centerBox">
			<li>
			<span class="background topicTitle">FORTH COMING EVENTS</span>
			<ul class="belowContent">
				<?php
					getResults("event","event","evnt_",4,"short","false",true);
				?>
			</ul>
			<span class="readMore"><a href="notices.php?type=event">All Events</a></span>
			</li>
			
			<li>
			<span class="background topicTitle">NOTICES</span>
			<ul class="belowContent">
				<?php
					getResults("notice","notice","notice_",4,"short","false",true);
				?>
			</ul>
			<span class="readMore"><a href="notices.php?type=notice">All Notices</a></span>
			</li>
			<li>
			
			<span class="background topicTitle">MORE @ NITKKR</span>
			<ul class="belowContent">
				<?php
					getResults("stdact","stdact","stdact_",4,"short","false",true);
				?>	
			</ul>
			<span class="readMore"><a href="notices.php?type=stdact">All Activities</a></span>
			</li>
			
			<li id="news">
			
			<span class="background topicTitle">NEWS AND ANNOUNCEMENTS</span>
			<ul id="ticker" class="belowContent">
					<?php
					getResults("news","news","news_",4,"short","false",true);
				?>
			</ul>
			<span class="readMore newsFloat"><a href="notices.php?type=news">All News</a></span>
			</li>
		</ul>
	</div>
<?php
	include("template/footer.php");
?>
