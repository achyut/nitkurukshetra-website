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
				$type=$_POST['type'];
				$mode=$_POST['mode'];
				if($mode=="edit"){
					$id = $_POST['id'];
				}
				
				function updateData($type,$table,$title,$shTitle,$sub,$url,$id,$new){
//				$query = "UPDATE pages SET pageTitle='$pageTitle',pageDesc='$pageDesc',pageContent='$pageContent' WHERE pageId='$pageId'";
					$query = "UPDATE ".$table." SET ".$sub."title = '".$title."',".$sub."url = '".$url."',".$sub."short = '".$shTitle."',".$sub."new = '".$new."' WHERE ".$sub."id = ".$id;	
					$result = mysql_query($query);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					else{
						echo "<h1><span class='success'>$type successfully Edited.</span></h1>";
						echo "<a href='notices.php?type=$type'>Show All $type</a><br/>";
					}
				}
				function insertData($type,$table,$title,$shTitle,$sub,$url,$new){
					$query = "INSERT INTO $table (".$sub."title,".$sub."url,".$sub."short,".$sub."new)VALUES ('$title', '$url','$shTitle','$new')";
					$result = mysql_query($query);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					else{
						echo "<h1><span class='success'>$type successfully added.</span></h1><br/><br/>";
						echo "<a href='notices.php?type=$type'>Show All $type</a><br/>";
					}
				}
			?>
			
			<?php
				$title = $_POST['title'];
				$shTitle = $_POST['shTitle'];
				$url = $_POST['file'];
				$new = $_POST['new'];
				//echo $title;
				//echo $shTitle;
				//echo $url;
				if(!preg_match('%^((https?://)|(www\.))([a-z0-9-].?)+(:[0-9]+)?(/.*)?$%i',$url)==true){
					$url ="files/".$url;
				}
			?>
			<?php 
					if($mode=="edit"){
						switch($type){
							case "event":
								updateData($type,"event",$title,$shTitle,"evnt_",$url,$id,$new);
								break;
							case "news":
								updateData($type,"news",$title,$shTitle,"news_",$url,$id,$new);
								break;
							case "notice":
								updateData($type,"notice",$title,$shTitle,"notice_",$url,$id,$new);
								break;
							case "stdact":
								updateData($type,"stdact",$title,$shTitle,"stdact_",$url,$id,$new);
								break;
							case "tender":
								updateData($type,"tender",$title,$shTitle,"tndr_",$url,$id,$new);
								break;
							case "interview":
								updateData($type,"walkin",$title,$shTitle,"wlk_",$url,$id,$new);
								break;
							case "scrollnews":
								updateData($type,"scrollnews",$title,$shTitle,"scroll_",$url,$id,$new);
								break;
							default:
								printErrorMessage();
						}	
					}
					else if($mode=="add"){
						switch($type){
							case "event":
								insertData($type,"event",$title,$shTitle,"evnt",$url,$new);
								break;
							case "news":
								insertData($type,"news",$title,$shTitle,"news_",$url,$new);
								break;
							case "notice":
								insertData($type,"notice",$title,$shTitle,"notice_",$url,$new);
								break;
							case "stdact":
								insertData($type,"stdact",$title,$shTitle,"stdact_",$url,$new);
								break;
							case "tender":
								insertData($type,"tender",$title,$shTitle,"tndr_",$url,$new);
								break;
							case "interview":
								insertData($type,"walkin",$title,$shTitle,"wlk_",$url,$new);
								break;
							case "scrollnews":
								insertData($type,"scrollnews",$title,$shTitle,"scroll_",$url,$new);
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
