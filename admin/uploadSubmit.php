<?php
	$_GET['page'] = 0;
	include("../template/adminheader.php");
?>
<div class="belowContainer">
	<div class="centerBox">
	<?php
				if ($_FILES["file"]["error"] > 0)
					  {
					  echo "Error: " . $_FILES["file"]["error"] . "<br>";
						die();
					  }
					else
					  {
					  /*
					  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
					  echo "Type: " . $_FILES["file"]["type"] . "<br>";
					  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
					  echo "Stored in: " . $_FILES["file"]["tmp_name"];
					  */
					  if(!file_exists("../files/uploads/" . $_FILES["file"]["name"])){
						  $url = $_FILES["file"]["name"];
						  if(move_uploaded_file($_FILES["file"]["tmp_name"],"../files/uploads/" . $url)){
						  	echo "<h1 class='success'>File successfully uploaded</h1>";
							echo "<a href='upload.php?action=view'>view all files</a>";
						  }
						  else{
						  	echo "<h1 class='error'>Error in uploading file</h1>";
						  }
					  }
					  else{
	  				  	  $url = $_FILES["file"]["name"] ;
						$url = explode(".",$url);
						$url = $url[0] .rand(1,1000).".".$url[1];
						 if(move_uploaded_file($_FILES["file"]["tmp_name"],"../files/uploads/" . $url)){
						  	echo "<h1 class='success'>File successfully uploaded</h1>";
							echo "<a href='upload.php?action=view'>view all files</a>";
						  }
						  else{
						  	echo "<h1 class='error'>Error in uploading file</h1>";
						  }
					  }
					  
					  }	
					  
		?>			  
					  
</div>
</div>
<?php
	include("../template/adminfooter.php");
?>