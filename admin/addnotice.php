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
			<?php
				$type=$_GET['type'];
				$type = cleanInput($type);
				$mode=$_GET['mode'];
				$mode=cleanInput($mode);
				if($mode=="edit"){
					$id = $_GET['id'];
					$id = cleanInput($id);
				}
				$title="";
				$shTitle="";
				$url="";
				$new = false;
				$linktype="file";
				
			?>
			<div class = "mainContent">
					<h1><?php echo $mode ?> new <?php if($type=="stdact"){echo "More @ NITKKR";}else {echo $type;}?></h1>
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
							case "archieve":
								$row = getData("archieve",$id,"arc_");
								break;
							default:
								printErrorMessage();
						}
							$id=$row[0];
							$title = $row[1];
							$url = $row[2];
							$shTitle = $row[3];
							$new = $row[4];
							$linkType = $row[5];
				}
				?>
				<script type="text/javascript">
						function show(id){
							document.getElementById(id).style.visibility = 'visible'; 
						}
						function hide(id){
							document.getElementById(id).style.visibility = 'hidden'; 
						}
						</script>
					<form action="submitnotice.php" method="post" enctype="multipart/form-data">
						Title: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="title" size="80" value="<?php echo $title; ?>" required /><br/><br>
						Homepage Title: <input type="text" value="<?php echo $shTitle ; ?>" name="shTitle" size="30" maxlength="60" required /><br/><br>
						Link Type:
						<input type="radio" name="linktype" value="file" <?php if($linktype=="file"){echo "checked=checked";}elseif($linktype=="url"){}else{echo "checked=checked";} ?> onclick="hide('link');show('file');">File					
						<input type="radio" name="linktype" value="url" <?php if($linktype=="url"){echo "checked=checked";} ?> onclick="hide('file');show('link');">Link<br>
						<input type="file" name="file" id="file" /><br/>
						<input type="text" name="url" id="link" size="30" value="<?php echo $url; ?>" />
						<br/>
						Mark As New:
						<input type="radio" name="new" value="true" <?php if($new=="true")echo "checked=checked"; ?>>True					
						<input type="radio" name="new" value="false" <?php if($new=="false"){echo "checked=checked";}elseif($new=="true"){}else{echo "checked=checked";} ?>>False<br><br>
						<input type="hidden" name="id" value="<?php echo $id ; ?>" />
						<input type="hidden" name="mode" value="<?php echo $mode ; ?>" />
						<input type="hidden" name="type" value="<?php echo $type ; ?>" />
						<input type="submit" value="submit">
					</form>
					<?php
					if($mode == "edit"){
						if($linkType == "url"){
							echo "<script type='text/javascript'>";
							echo "document.getElementById(url).style.visibility = 'visible'; ";
							echo "document.getElementById(file).style.visibility = 'hidden'; ";
							echo "</script>";
						}
					}
					?>		
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
