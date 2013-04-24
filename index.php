<?php
	include("template/header.php");
?>
	<div id="slider" class="slideShowContainer">
		<div><img src="images/pic4.jpg" /></div>
		<div><img src="images/pic7.jpg" /></div>
		<div><img src="images/pic3.jpg" /></div>
		<div><img src="images/pic1.jpg" /></div>
		<div><img src="images/pic8.jpg" /></div>
		
	</div>

	<div class="belowContainer">
			<div class="marquee centerBox"><span class="latestText">HAPPENING NOW:</span>
			<ul class="marqueeNews">
			<marquee>
			<?php echo `whoami`;  ?>

				<?php
					getResults("scrollnews","scrollnews","scroll_",5,"short","false");
				?>
			</marquee>
			</ul>
			<ul class="archieve">
				<li><img src="images/gallery.png" width="25px" height="25px" />&nbsp;&nbsp;<a href="#">PHOTOS</a></li>
				<li><img src="images/archieve.png" width="25px" height="25px" />&nbsp;&nbsp;<a href="#">ARCHIEVE</a></li>				
			</ul>
		</div>
		
		<ul class="belowTopics centerBox">
			<li>
			<span class="background topicTitle">FORTH COMING EVENTS</span>
			<ul class="belowContent">
				<?php
					getResults("event","event","evnt_",5,"short","false");
				?>
			</ul>
			<span class="readMore"><a href="notices.php?type=event">All Events</a></span>
			</li>
			
			<li>
			<span class="background topicTitle">NOTICES</span>
			<ul class="belowContent">
				<?php
					getResults("notice","notice","notice_",5,"short","false");
				?>
			</ul>
			<span class="readMore"><a href="notices.php?type=notice">All Notices</a></span>
			</li>
			<li>
			
			<span class="background topicTitle">STUDENT ACTIVITIES</span>
			<ul class="belowContent">
				<?php
					getResults("stdact","stdact","stdact_",5,"short","false");
				?>	
			</ul>
			<span class="readMore"><a href="notices.php?type=stdact">All Activities</a></span>
			</li>
			
			<li id="news">
			
			<span class="background topicTitle">NEWS AND ANNOUNCEMENTS</span>
			<ul id="ticker" class="belowContent">
					<?php
					getResults("news","news","news_",5,"short","false");
				?>
			</ul>
			<span class="readMore newsFloat"><a href="notices.php?type=news">All News</a></span>
			</li>
		</ul>
	</div>
<?php
	include("template/footer.php");
?>
