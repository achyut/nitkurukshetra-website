<?php
	include("../template/adminheader.php");
?>
<style>
	textarea{
		width:100%;
	}
	input[type=text]{width:100%;}
	.side{
		width:98%;
	}
</style>
<script src="ckeditor/ckeditor.js"></script>

<?php
				$mode = $_GET['mode'];
				$pageId = $_GET["page"];
				$template = $_GET["template"];
				$data = showPageDetails($pageId);
			?>
			<?php
				if(!empty($template)){
			?>
			<form action="<?php if(!empty($pageId)){echo"edit.php";}else{echo"add.php";} ?>" method="POST">
			<input type="hidden" name="pageId" value="<?php echo $data[0];?>"/>
			<input type="hidden" name="template" value="<?php echo $template;?>"/>
	<div class="belowContainer">
		
		<div class="centerBox">
			<?php 
				if($template=="full"){
					include("../template/fullpage.php");
				}
				else if($template =="profile"){
					include("../template/profilepage.php");
				}
				else if($template =="department"){
					include("../template/departmentpage.php");
				}
				else if($template =="faculty"){
					include("../template/facultypage.php");
				}
				else if($template =="sidenav"){
					include("../template/sidenavpage.php");
				}			
				else{
					include("../template/sidenavpage.php");
				}
			?>
		</div>
		
	</div>
	</form>
	<?php
	}
	else{
	?>	
	<div class="belowContainer">
		<div class="centerBox">
			<div class="mainContent">
			
			<h1>Please select a template for the page</h1>
			<a><a href="addpage.php?mode=add&&template=sidenav">Common page with navigation in sidebar</a><br>
			<a><a href="addpage.php?mode=add&&template=department">Department Homepage</a><br>
			<a><a href="addpage.php?mode=add&&template=faculty">Faculty Page</a><br>
			<a><a href="addpage.php?mode=add&&template=profile">Profile Page</a><br>
			<a><a href="addpage.php?mode=add&&template=full">Full Blank Page</a><br>
		</div>
		</div>
	</div>
	<?php
	}
	?>
<?php
	include("../template/adminfooter.php");
?>
