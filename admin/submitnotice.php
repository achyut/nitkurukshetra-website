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
				$type=$_POST['type'];
				$mode=$_POST['mode'];
				if($mode=="edit"){
					$id = $_POST['id'];
				}
				
				function updateData($type,$table,$title,$shTitle,$sub,$url,$id,$new,$linkType){
//				$query = "UPDATE pages SET pageTitle='$pageTitle',pageDesc='$pageDesc',pageContent='$pageContent' WHERE page_id='$pageId'";
					$query = "UPDATE ".$table." SET ".$sub."title = '".$title."',".$sub."url = '".$url."',".$sub."short = '".$shTitle."',".$sub."new = '".$new."',".$sub."file = '".$linkType."' WHERE ".$sub."id = ".$id;	
					$result = mysql_query($query);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					else{
						echo "<h1><span class='success'>$type successfully Edited.</span></h1>";
						echo "<a href='notices.php?type=$type'>Show All $type</a><br/>";
					}
				}
				function insertData($type,$table,$title,$shTitle,$sub,$url,$new,$linkType){
		$query = "INSERT INTO $table (".$sub."title,".$sub."url,".$sub."short,".$sub."new,".$sub."file)VALUES('$title', '$url','$shTitle','$new','$linkType')";
					$result = mysql_query($query);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					else{
						echo "<h1><span class='success'>";
						if($type=="stdact"){echo "More @ NITKKR";}else {echo $type;}
						echo" successfully added.</span></h1><br/><br/>";
						echo "<a href='notices.php?type=$type'>Show All ";
						if($type=="stdact"){echo "More @ NITKKR";}else {echo $type;}
						echo"</a><br/>";
					}
				}
			?>
			
			
			<?php
				function addFile(){
				
				}
				
				$title = $_POST['title'];
				$title = escapeQuote($title);
				$shTitle = $_POST['shTitle'];
				$shTitle = escapeQuote($shTitle);
				$url = $_POST['url'];
				$url = escapeQuote($url);
				$new = $_POST['new'];
				//echo $title;
				//echo $shTitle;
				//echo $url;
				$linkType = $_POST['linktype'];
				if($linkType=="file"){
					if($mode == "edit"){
						if ($_FILES["file"]["size"]<=0){
							
						}
						else if ($_FILES["file"]["size"]>0){
						
							if ($_FILES["file"]["error"] > 0)
							  {
								  echo "Error: " . $_FILES["file"]["error"] . "<br>";
									die();
							  }
							else
							  {
								unlink("../files/".$url);
								  /*
								  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
								  echo "Type: " . $_FILES["file"]["type"] . "<br>";
								  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
								  echo "Stored in: " . $_FILES["file"]["tmp_name"];
								  */
								  if(!file_exists("../files/" . $_FILES["file"]["name"])){
									  $url = $_FILES["file"]["name"];
									  move_uploaded_file($_FILES["file"]["tmp_name"],"../files/" . $url);
								  }
								  else{
									  $url = $_FILES["file"]["name"] ;
									  $url = explode(".",$url);
									  $url = $url[0] .rand(1,1000).".".$url[1];
									  move_uploaded_file($_FILES["file"]["tmp_name"],"../files/" . $url);
									  }
								}
						}
						else{
	
							}
					}
					else{
							echo "add new file";					
							/*
								  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
								  echo "Type: " . $_FILES["file"]["type"] . "<br>";
								  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
								  echo "Stored in: " . $_FILES["file"]["tmp_name"];
								  */
								  if(!file_exists("../files/" . $_FILES["file"]["name"])){
									  $url = $_FILES["file"]["name"];
									  move_uploaded_file($_FILES["file"]["tmp_name"],"../files/" . $url);
								  }
								  else{
									  $url = $_FILES["file"]["name"] ;
									  $url = explode(".",$url);
									  $url = $url[0] .rand(1,1000).".".$url[1];
									  move_uploaded_file($_FILES["file"]["tmp_name"],"../files/" . $url);
									  }
					}
					
				}
		
			?>
			<?php 
					if($mode=="edit"){
						switch($type){
							case "event":
								updateData($type,"event",$title,$shTitle,"evnt_",$url,$id,$new,$linkType);
								break;
							case "news":
								updateData($type,"news",$title,$shTitle,"news_",$url,$id,$new,$linkType);
								break;
							case "notice":
								updateData($type,"notice",$title,$shTitle,"notice_",$url,$id,$new,$linkType);
								break;
							case "stdact":
								updateData($type,"stdact",$title,$shTitle,"stdact_",$url,$id,$new,$linkType);
								break;
							case "tender":
								updateData($type,"tender",$title,$shTitle,"tndr_",$url,$id,$new,$linkType);
								break;
							case "interview":
								updateData($type,"walkin",$title,$shTitle,"wlk_",$url,$id,$new,$linkType);
								break;
							case "scrollnews":
								updateData($type,"scrollnews",$title,$shTitle,"scroll_",$url,$id,$new,$linkType);
								break;
							case "archieve":
								updateData($type,"archieve",$title,$shTitle,"arc_",$url,$id,$new,$linkType);
								break;
							default:
								printErrorMessage();
						}	
					}
					else if($mode=="add"){
						switch($type){
							case "event":
								insertData($type,"event",$title,$shTitle,"evnt_",$url,$new,$linkType);
								break;
							case "news":
								insertData($type,"news",$title,$shTitle,"news_",$url,$new,$linkType);
								break;
							case "notice":
								insertData($type,"notice",$title,$shTitle,"notice_",$url,$new,$linkType);
								break;
							case "stdact":
								insertData($type,"stdact",$title,$shTitle,"stdact_",$url,$new,$linkType);
								break;
							case "tender":
								insertData($type,"tender",$title,$shTitle,"tndr_",$url,$new,$linkType);
								break;
							case "interview":
								insertData($type,"walkin",$title,$shTitle,"wlk_",$url,$new,$linkType);
								break;
							case "scrollnews":
								insertData($type,"scrollnews",$title,$shTitle,"scroll_",$url,$new,$linkType);
								break;
							case "archieve":
								insertData($type,"archieve",$title,$shTitle,"arc_",$url,$new,$linkType);
								break;
							default:
								printErrorMessage();
						}
					}
				?>
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
