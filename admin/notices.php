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
					$type= $_GET['type'];
					echo "<h1>$type of NIT Kurukshetra</h1>";
					echo "<a href='addnotice.php?type=$type&&mode=add'>Add New $type</a></br>";
					echo "<ul class='noticeList'>";
					if($type=="event"){
						getResults("event","event","evnt_",2,"long");					
					}
					else if($type=="news"){
						getResults("news","news","news_",2,"long");
					}
					else if($type=="notice"){
						getResults("notice","notice","notice_",2,"long");
					}
					else if($type=="stdact"){
						getResults("stdact","stdact","stdact_",2,"long");
					}
					else if($type=="tender"){
						getResults("tender","tender","tndr_",2,"long");
					}
					else if($type=="interview"){
						getResults("interview","walkin","wlk_",2,"long");											
					}
					else if($type=="scrollnews"){
						getResults("scrollnews","scrollnews","scroll_",2,"long");											
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
