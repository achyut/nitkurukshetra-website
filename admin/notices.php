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
					$type= $_GET['type'];
					echo "<h1>";
					if($type=="stdact"){echo "More @ NITKKR";}else {echo $type;}
					echo " of NIT Kurukshetra</h1>";
					echo "<a href='addnotice.php?type=$type&&mode=add'>Add New ";
					if($type=="stdact"){echo "More @ NITKKR";}else {echo $type;}
					echo "</a></br>";
					echo "<ul class='noticeList'>";
					if($type=="event"){
						getResults("event","event","evnt_",2,"long","true");					
					}
					else if($type=="news"){
						getResults("news","news","news_",2,"long","true");
					}
					else if($type=="notice"){
						getResults("notice","notice","notice_",2,"long","true");
					}
					else if($type=="stdact"){
						getResults("stdact","stdact","stdact_",2,"long","true");
					}
					else if($type=="tender"){
						getResults("tender","tender","tndr_",2,"long","true");
					}
					else if($type=="interview"){
						getResults("interview","walkin","wlk_",2,"long","true");											
					}
					else if($type=="scrollnews"){
						getResults("scrollnews","scrollnews","scroll_",2,"long","true");											
					}
					else if($type=="archieve"){
						getResults("archieve","archieve","arc_",2,"long","true");											
					}
					else{
						echo "oops broken link!!!";
					}
					echo "</ul>";
					?>
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
