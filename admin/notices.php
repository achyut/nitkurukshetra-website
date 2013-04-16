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
					function getResults($type,$table,$scut){
						$query = "SELECT * FROM $table";
						$result = mysql_query($query);
						if (!$result) {
							die('Invalid query: ' . mysql_error());
						}
						echo "<ul class='noticeList'>";
						while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
							$id = $row[0];
							$title = $row[1];
							$url = $row[2];
							echo "<li><a href='$url'>$title</a>&nbsp;&nbsp;<a href='addnotice.php?mode=edit&&id=$id&&type=$type'><img src='../images/edit.png' /></a>&nbsp;&nbsp;<a href='deletenotice.php?id=$id&&type=$type'><img src='../images/delete.png' /></a></li>";
						}
						echo "</ul>";
					}
					$type= $_GET['type'];
					if($type="event"){
						
						echo "<h1>Forth Coming events of NIT Kurukshetra</h1>";
						echo "<a href='addnotice.php?type=$type'>Add New Event</a></br>";
						getResults("event","event","evnt_");
						
					}
					else if($type="news"){
						getResults("news","news","news_");
					}
					else if($type="notice"){
					
					}
					else if($type="stdact"){
					
					}
					else if($type="tender"){
					
					}
					else if($type="interview"){
											
					}
					else{
						echo "oops broken link!!!";
					}
					?>
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
