<?php
	include("../template/adminheader.php");
?>
<style>
	textarea{
		width:100%;
	}
	input[type=text]{width:100%;}
</style>
<script src="ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" href="sample.css">

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
				$pageId=$_GET['pageId'];
				$mode = $_GET['mode'];
				$pageId = $_GET["page"];
				if(!empty($pageId)){
					$query = "SELECT * FROM `pages` WHERE pageId = $pageId";
					$result = mysql_query($query);
					if (!$result) {
						die('Invalid query: ' . mysql_error());
					}
					$num_rows = mysql_num_rows($result);
					if(!$num_rows){
						$pageTitle="";
						$pageDesc="National Institute of Technology.";
						$pageContent = "The requested page cannot be found";
					}
					else{
						$row = mysql_fetch_row($result);
						//var_dump($row);
						$pageTitle=$row[1];
						$pageDesc = $row[2];
						$pageContent = $row[3];
					}
				}
				else{
	
					$pageTitle="";
					$pageDesc="National Institute of Technology.";
					$pageContent = "";
	
				}
			?>
			
			<form action="<?php if(!empty($pageId)){echo"edit.php";}else{echo"add.php";} ?>" method="POST">
					Page Title: <input type="text" name="title" value="<?php echo $pageTitle;?>"><br/>
					Page Description:<textarea name="pageDesc"><?php echo$pageDesc;?></textarea><br/>
					
					<textarea class="ckeditor" id="editor1" name="editor1" rows="10"><?php echo$pageContent;?></textarea><br/>
					<input type="submit" value="submit"/>
					<input type="hidden" name="pageId" value="<?php echo $pageId;?>"/>
			</form>
			
			</div>
		</div>
	</div>
<?php
	include("../template/footer.php");
?>
