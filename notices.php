<?php
	$_GET['page']=0;
	include("template/header.php");
?>
	<div class="belowContainer">
		<div class="centerBox">
			<div class="sideBar">
				<ul class="sideNav">
					<li><a href="notices.php?type=event">All Events</a></li>	
					<li><a href="notices.php?type=notice">All Notices</a></li>
					<li><a href="notices.php?type=stdact">All More @ NITKKR</a></li>
					<li><a href="notices.php?type=news">All News</a></li>
					<li><a href="notices.php?type=scrollnews">All Scroll News</a></li>
					<li><a href="notices.php?type=tender">All Tender Quatations</a></li>
					<li><a href="notices.php?type=archieve">All Archieve News</a></li>
				</ul>
			</div> <!-- sidenav ends -->
			<div class = "mainContent">
				<?php 
					$type= $_GET['type'];
					$type=cleanInput($type);
					
					if($type=="event"){
						echo "<h1>Event listing of NIT Kurukshetra</h1>";
						echo "<ul class='noticeList'>";
						getResults("event","event","evnt_",2,"long","false",true);					
						echo "</ul>";
					}
					else if($type=="news"){
						echo "<h1>News listing of NIT Kurukshetra</h1>";
						echo "<ul class='noticeList'>";
							getResults("news","news","news_",2,"long","false",true);
						echo "</ul>";
					}
					else if($type=="notice"){
						echo "<h1>Notice listing of NIT Kurukshetra</h1>";
						echo "<ul class='noticeList'>";
						getResults("notice","notice","notice_",2,"long","false",true);
						echo "</ul>";
					}
					else if($type=="stdact"){
						echo "<h1>More @ NIT Kurukshetra</h1>";
						echo "<ul class='noticeList'>";
						getResults("stdact","stdact","stdact_",2,"long","false",true);
						echo "</ul>";
					}
					else if($type=="tender"){
						echo "<h1>Tender listing of NIT Kurukshetra</h1>";
						echo "<ul class='noticeList'>";
						getResults("tender","tender","tndr_",2,"long","false",true);
						echo "</ul>";
					}
					else if($type=="interview"){
						echo "<h1>Vacancy listing of NIT Kurukshetra</h1>";
						echo "<ul class='noticeList'>";
						getResults("interview","walkin","wlk_",2,"long","false",true);	
						echo "</ul>";										
					}
					else if($type=="scrollnews"){
						echo "<h1>Scroll News listing of NIT Kurukshetra</h1>";
						echo "<ul class='noticeList'>";
						getResults("scrollnews","scrollnews","scroll_",2,"long","false",true);	
						echo "</ul>";										
					}
					else if($type=="archieve"){
						echo "<h1>Archieve listing of NIT Kurukshetra</h1>";
						echo "<ul class='noticeList'>";
						getResults("archieve","archieve","arc_",2,"long","false",true);	
						echo "</ul>";										
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
	include("template/footer.php");
?>
