<?php
	$_GET['page']=0;
	include("../template/adminheader.php");
?>
	<div class="belowContainer">
		<div class="centerBox">
			<div class="sideBar">
				<ul class="sideNav">
					<li><a href="#">Welcome!</a></li>	
					<li><a href="#"><?php echo $user ?></a></li>
					<li><a href="logout.php">Logout</a></li>	
				</ul>
			</div> <!-- sidenav ends -->
			<div class = "mainContent">	
				<h1>NIT Kurukshetra Website Administrative Area</h1>
					<a href="sitemap.php">Add/Edit Website</a><br/><br>
					<a href="notices.php?type=scrollnews">Scroll News</a><br/>
					<a href="notices.php?type=news">News feed</a><br/>
					<a href="notices.php?type=event">Forth coming events</a><br/>
					<a href="notices.php?type=notice">Notices</a><br/>
					<a href="notices.php?type=stdact">More @ NITKKR</a><br/>
					<a href="notices.php?type=tender">Tender</a><br/>
					<a href="notices.php?type=interview">Walkin Interview</a><br/>
					<a href="notices.php?type=archieve">Archieve</a><br/>
					<a href="user.php?action=view">Users</a><br/>
					<a href="upload.php?action=view">Files</a><br/>
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
