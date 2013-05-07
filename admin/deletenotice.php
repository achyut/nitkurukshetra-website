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
					$id = $_GET['id'];
					$type = $_GET['type'];
					$confirm = $_GET['confirm'];
					if(!empty($confirm)){
						switch($type){
							case "event":
								$table = "event";
								$sht = "evnt_id";
								$sub = "evnt_";
								break;
							case "news":
								$table = "news";
								$sht = "news_id";
								$sub = "news_";
								break;
							case "notice":
								$table = "notice";
								$sht = "notice_id";
								$sub = "notice_";
								break;
							case "stdact":
								$table = "stdact";
								$sht = "stdact_id";
								$sub = "stdact_";
								break;
							case "tender":
								$table = "tender";
								$sht = "tndr_id";
								$sub = "tndr_";							
								break;
							case "interview":
								$table = "walkin";
								$sht = "wlk_id";							
								$sub = "wlk_";
								break;
							case "scrollnews":
								$table = "scrollnews";
								$sht = "scroll_id";							
								$sub = "scroll_";
								break;
							case "archieve":
								$table = "archieve";
								$sht = "arc_id";							
								$sub = "arc_";
								break;
							case "page":
								$table = "pages";
								$sht = "page_id";
								break;
							default:
								printErrorMessage();
						}
						if($type!=="page"){
							$data = getData($table,$id,$sub);
							if($data[5]=="file"){
								unlink("../files/".$data[2]);
							}
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
					
					}
					else{
						echo "<h1 class='error'>Do you want to delete this item??<h1>";
						echo "<a href='deletenotice.php?id=$id&&type=$type&&confirm=yes'>Yes</a><br/><br/>";
						echo "<a href='sitemap.php'>No</a><br/>";
						
					}
					
	
					?>
					
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
