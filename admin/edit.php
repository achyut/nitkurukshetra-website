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
					<?php
					$pageId = $_POST['pageId'];
					$pageTitle = $_POST['title'];
					$pageDesc = $_POST['pageDesc'];
					$pageContent = $_POST['editor1'];
					$template = $_POST['template'];
					$pageLink = $_POST['pageLink'];
					$pageLink = json_encode($pageLink);
					$query = "UPDATE pages SET pageTitle='$pageTitle',pageDesc='$pageDesc',pageContent='$pageContent',pageLink='$pageLink',template='$template' WHERE pageId='$pageId'";
					$result = mysql_query($query);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					else{
						echo "<h1><span class='success'>Page successfully Edited.</span></h1>";
						echo "<a href='sitemap.php'>Edit new page</a><br/>";
						echo "<a href='addpage.php'>Add new page</a>";
					}
	
					?>
					
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
