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
					$pageTitle = $_POST['title'];
					$pageDesc = $_POST['pageDesc'];
					$pageContent = $_POST['editor1'];
					$query = "INSERT INTO pages (pageTitle,pageDesc,pageContent)VALUES ('$pageTitle', '$pageDesc','$pageContent')";
					$result = mysql_query($query);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					else{
						echo "<h1><span class='success'>Page successfully added.</span></h1><br/><br/>";
						echo "<a href='addpage.php'>Add new page</a><br/>";
						echo "<a href='index.php'>Edit new page</a><br/>";
					}
	
					?>
					
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
