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
					<?php
					$pageId = $_POST['pageId'];
					$pageTitle = $_POST['title'];
					$pageDesc = $_POST['pageDesc'];
					$pageContent = $_POST['editor1'];
					$template = $_POST['template'];
					$pageLink = $_POST['pageLink'];
					$pageLink = json_encode($pageLink);
					$query = "UPDATE pages SET page_title='$pageTitle',page_desc='$pageDesc',page_content='$pageContent',page_link='$pageLink',template='$template' WHERE page_id='$pageId'";
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
