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
					$id = $_GET['id'];
					$type = $_GET['type'];
					switch($type){
						case "event":
							$table = "event";
							$sht = "evnt_id";
							break;
						case "news":
							$table = "news";
							$sht = "news_id";
							break;
						case "notice":
							$table = "notice";
							$sht = "notice_id";
							break;
						case "stdact":
							$table = "stdact";
							$sht = "stdact_id";
							break;
						case "tender":
							$table = "tender";
							$sht = "tndr_id";							
							break;
						case "interview":
							$table = "walkin";
							$sht = "wlk_id";							
							break;
						case "page":
							$table = "pages";
							$sht = "pageId";
							break;
						default:
							printErrorMessage();
					}
					
					$query = "DELETE FROM ".$table." WHERE ".$sht."='".$id."'";
					$result = mysql_query($query);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					else{
						echo "<h1><span class='success'>$type successfully Deleted.</span></h1>";
						if($type=="page"){
						echo "<a href='sitemap.php'>Show All $type</a><br/>";
						}
						else{
						echo "<a href='notices.php?type=$type'>Show All $type</a><br/>";
						}
						
					}
	
					?>
					
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
