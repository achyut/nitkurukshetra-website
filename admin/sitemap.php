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
			<h1>SiteMap of Website</h1>
					<a href="addpage.php?mode=add">Add new page</a><br/>
			<?php
			function getPageResults($type,$table,$scut){
						$query = "SELECT * FROM ".$table." ORDER by ".$scut."";
						$result = mysql_query($query);
						if (!$result) {
							die('Invalid query: ' . mysql_error());
						}
						echo "<ul class='noticeList'>";
						while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
							$id = $row[0];
							$title = $row[1];
							$template = $row[5];
							echo "<li><a href='../institute.php?page=$id'>$title</a>&nbsp;&nbsp;<a href='addpage.php?mode=edit&&page=$id&&template=$template'><img src='../images/edit.png' /></a>&nbsp;&nbsp;<a href='deletenotice.php?id=$id&&type=page'><img src='../images/delete.png' /></a></li>";
						}
						echo "</ul>";
					}
					
			?>
			<?php 
			getPageResults("","pages","pageTitle");
			?>
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
