<?php
	$_GET['page'] = 0;
	$action = $_GET['action'];
	include("../template/adminheader.php");
?>
<div class="belowContainer">
	<div class="centerBox">
	<br />
	<a href="upload.php?action=upload">Upload New file</a>
	<?php
		if($action =="view"){
		echo "<ul>";
		if ($handle = opendir('../files/uploads/')) {
			while (false !== ($entry = readdir($handle))) {
				if ($entry != "." && $entry != ".." && $entry != "Thumbs.db") { 
					echo"<li><a href='../files/uploads/$entry'>$entry</a>&nbsp;&nbsp;<a href='upload.php?action=delete&&file=$entry&&confirm=no'><img src='../images/delete.png'></a></li><br>";
				}
			}
			closedir($handle);
		}
		echo "</ul>";
		}
		else if($action =="delete"){
			$confirm = $_GET['confirm'];
			$file = $_GET['file'];
			echo $file;
			if($confirm =="yes"){
				if(unlink("../files/uploads/".$file)){
					echo "<h1 class='success'>File successfully deleted</h1>";
					echo "<span><a href='upload.php?action=view'>view all files</a></span>";
				}
				else{
					echo "<h1 class='error'>OOPs some problem deleting the file. May be file not found</h1>";
					echo "<span><a href='upload.php?action=view'>view all files</a></span>";
				}
			}
			else if($confirm=="no"){
				echo "<h1>Do you want to delete this file??</h1>";
				echo "<h1 class='success'><a href='upload.php?action=delete&&file=$file&&confirm=yes'>Yes</a></h1>";
				echo "<h1 class='success'><a href='upload.php?action=view'>No</a></h1>";
			}
			else{
				echo "<h1 class='success'><a href='upload.php?action=view'>view all files</a></h1>";
			}
		?>
		<?php
		}
		else{
			?>
			<h1>Upload a file:
		<form action="uploadSubmit.php" enctype="multipart/form-data" method="post">
			<input type="file" name="file" id="file" />
			<input type="submit" value="upload"/>
			<input type="hidden" name="action" value="uploadSubmit">
		</form>
			<?php
		}
		?>
	</div>
</div>
<?php
	include("../template/adminfooter.php");
?>