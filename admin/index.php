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
					<a href="addpage.php?mode=add">Add new page</a><br/><br/><br/>
					<form action="addpage.php?mode=edit" method="GET">edit exising page<br/>Page Id:<input name="page" type="text"/><input type="submit" value="edit"/></form></a><br/>
					<a href="#">view sitemap</a><br/>
			</div>
		</div>
	</div>
<?php
	include("../template/footer.php");
?>
