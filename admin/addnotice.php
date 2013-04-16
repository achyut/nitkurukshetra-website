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
					$query = 'SELECT * FROM '.$table.' WHERE '.$sub.'_id ='.$id;
					$result = mysql_query($query);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					$num_rows = mysql_num_rows($result);
					if(!$num_rows){
						echo "oops id not found";
					}
					else{
						$row = mysql_fetch_row($result);
						//var_dump($row);
						$id=$row[0];
						$title = $row[1];
						$url = $row[2];
						echo $id;
						echo $title;
						echo $url;
					}
				}
			?>
			<div class = "mainContent">
					<h1>Add new <?php echo $type ?></h1>
					<?php 
					if($mode=="edit"){
						switch($type){
							case "event":
								getData("event",$id,"evnt");
								break;
						}	
					}
					else{
						?>
					
					
						<?php
					}
					?>
					
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
