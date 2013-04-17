<?php
	include("../template/adminheader.php");
?>
	<div class="belowContainer">
		<div class="centerBox">
			<div class="sideBar">
				<ul class="sideNav">
					<li><a href="#">Welcome!</a></li>	
					<li><a href="#">Administrator</a></li>	
				</ul>
			</div> <!-- sidenav ends -->
			<div class = "mainContent">	
				<h1>NIT Kurukshetra Website Administrative Area</h1>
					<a href="sitemap.php">Add/Edit Website</a><br/><br>
					<a href="notices.php?type=scrollnews">Scroll News</a><br/>
					<a href="notices.php?type=news">News feed</a><br/>
					<a href="notices.php?type=event">Forth coming events</a><br/>
					<a href="notices.php?type=notice">Notices</a><br/>
					<a href="notices.php?type=stdact">Student activity</a><br/>
					<a href="notices.php?type=tender">Tender</a><br/>
					<a href="notices.php?type=interview">Walkin Interview</a><br/>
					<a href="#"></a><br/>
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
