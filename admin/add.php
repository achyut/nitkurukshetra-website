<?php
	$_GET['page']=0;
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
					<?php 
					$pageTitle = $_POST['title'];
					$pageTitle = $pageTitle;
					$pageDesc = $_POST['pageDesc'];
					$pageContent = $_POST['editor1'];
					$pageLink = $_POST['pageLink'];
					$template = $_POST['template'];
					$pageLink = json_encode($pageLink);
					$query = "INSERT INTO pages (page_title,page_desc,page_content,page_link,template)VALUES ('$pageTitle', '$pageDesc','$pageContent','$pageLink','$template')";
					$result = mysql_query($query);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					else{
						echo "<h1><span class='success'>Page successfully added.</span></h1><br/><br/>";
						echo "<a href='addpage.php'>Add new page</a><br/>";
						echo "<a href='sitemap.php'>View all pages</a><br/>";
					}
	
					?>
					
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
