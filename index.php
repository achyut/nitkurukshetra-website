<?php
	include("template/header.php");
?>
	<div id="slideShow" class="slideShowContainer">
		<img src="images/pic4.jpg" />
		<img src="images/pic6.JPG" />
		<img src="images/pic3.jpg" />
		<img src="images/pic1.jpg" />
		
	</div>

	<div class="belowContainer">
			<div class="marquee centerBox"><span class="latestText">HAPPENING NOW:</span>
			<ul class="marqueeNews">
			<marquee>
				<li><a href="#">This is news1</a></li>	
				<li><a href="#">This is news2</a></li>
				<li><a href="#">This is news3</a></li>
			</marquee>
			</ul>
			<ul class="archieve">
				<li><a href="#">PHOTOS</a></li>
				<li>::</li>
				<li><a href="#">ARCHIEVE</a></li>				
			</ul>
		</div>
		
		<ul class="belowTopics centerBox">
			<li>
			<span class="topicTitle">FORTH COMING EVENTS</span>
			<ul class="belowContent">
				<?php
					getResults("event","event","evnt_",5,"short");
				?>
			</ul>
			<span class="readMore"><a href="notices.php?type=event">All Events</a></span>
			</li>
			
			<li>
			<span class="topicTitle">NOTICES</span>
			<ul class="belowContent">
				<?php
					getResults("notice","notice","notice_",5,"short");
				?>
			</ul>
			<span class="readMore"><a href="notices.php?type=notice">All Notices</a></span>
			</li>
			<li>
			
			<span class="topicTitle">STUDENT ACTIVITIES</span>
			<ul class="belowContent">
				<?php
					getResults("stdact","stdact","stdact_",5,"short");
				?>	
			</ul>
			<span class="readMore"><a href="notices.php?type=stdact">All Activities</a></span>
			</li>
			
			<li id="news">
			
			<span class="topicTitle">NEWS AND ANNOUNCEMENTS</span>
			<ul id="ticker" class="belowContent">
					<?php
					getResults("news","news","news_",5,"short");
				?>
			</ul>
			<span class="readMore newsFloat"><a href="notices.php?type=news">All News</a></span>
			</li>
		</ul>
	</div>
<?php
	include("template/footer.php");
?>
