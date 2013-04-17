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
			<?php
				$type=$_GET['type'];
				$mode=$_GET['mode'];
				if($mode=="edit"){
					$id = $_GET['id'];
				}
				
				function getData($table,$id,$sub){
					$query = 'SELECT * FROM '.$table.' WHERE '.$sub.'id ='.$id;
					$result = mysql_query($query);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					$num_rows = mysql_num_rows($result);
					if(!$num_rows){
						echo "oops id not found";
						$title="";
						$shTitle="";
						$url="";
					}
					else{
						$row = mysql_fetch_row($result);
						//var_dump($row);
						return $row;

					}
				}
			?>
			<div class = "mainContent">
					<h1><?php echo $mode ?> new <?php echo $type ?></h1>
					<?php 
					if($mode=="edit"){
						switch($type){
							case "event":
								$row = getData("event",$id,"evnt_");
								break;
							case "news":
								$row = getData("news",$id,"news_");
								break;
							case "notice":
								$row = getData("notice",$id,"notice_");
								break;
							case "stdact":
								$row = getData("stdact",$id,"stdact_");
								break;
							case "tender":
								$row = getData("tender",$id,"tndr_");
								break;
							case "interview":
								$row = getData("walkin",$id,"wlk_");
								break;
							case "scrollnews":
								$row = getData("scrollnews",$id,"scroll_");
								break;
							default:
								printErrorMessage();
						}
							$id=$row[0];
							$title = $row[1];
							$url = $row[2];
							$url = explode("/",$url);
							$url = $url[1];
							$shTitle = $row[3];	
				}
				?>
					<form action="submitnotice.php" method="post">
						Title: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="title" size="80" value="<?php echo $title; ?>"/><br/><br>
						Homepage Title: <input type="text" value="<?php echo $shTitle ; ?>" name="shTitle" size="30" maxlength="30"/><br/><br>
						File name / URL:<input type="text" name="file" id="file" value="<?php echo $url;?>"><br><br>
						<input type="hidden" name="id" value="<?php echo $id ; ?>" />
						<input type="hidden" name="mode" value="<?php echo $mode ; ?>" />
						<input type="hidden" name="type" value="<?php echo $type ; ?>" />
						<input type="submit" value="submit">
					</form>			
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
