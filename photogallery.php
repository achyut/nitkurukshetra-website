<?php
	$_GET['page']=0;
	include("template/header.php");
?>

	<div class="belowContainer">
		
		<div class="centerBox">
		<h1>Photo Gallery</h1>
		<?php
		function displayAlbum($path){
		if ($handle = opendir($path)) {
		  $files = array();
		  while ($files[] = readdir($handle));
		  sort($files);
	
		foreach ($files as $file) {
	  
				//MANIPULATE FILENAME HERE, YOU HAVE $file...
				if ($file != "." && $file != ".." && $file!="Thumbs.db" && $file != false){
				  
				 echo"<li><a href='photos.php?album=$path/$file'>";
					if ($handle1 = opendir("$path/".$file)) {
						$loop = 0;
						while (false !== ($entry1 = readdir($handle1)) && $loop!==1) {
							if ($entry1 != "." && $entry1 != ".." && $entry1 != "Thumbs.db") {
								echo"<img src='$path/$file/$entry1' />";
								$loop++;
							}
						}
						closedir($handle1);
					}
					echo"</a><span>$file</span></li>";
				}
		  }
			closedir($handle);
		}
		}

		?>
		<h2>Photos of institute and surroundings</h2>
		<ul class="albumList">
			<?php displayAlbum("photo/college"); ?>
		</ul>
		<div class="clear"></div>
		<h2>Photos of Departments</h2>
		<ul class="albumList">
			<?php displayAlbum("photo/departments"); ?>
		</ul>
		<div class="clear"></div>
		<h2>Photos of Events held in college</h2>
		<ul class="albumList">
			<?php displayAlbum("photo/events"); ?>
		</ul>
		<div class="clear"></div>
		<h2>Photos of Technical societies and clubs</h2>
		<ul class="albumList">
			<?php displayAlbum("photo/clubs"); ?>
		</ul>
		<div class="clear"></div>
		<h2>Other Extra photos</h2>
		<ul class="albumList">
			<?php displayAlbum("photo/extra"); ?>
		</ul>
		<p>&nbsp;</p>
	</div>
	</div>
<?php
	include("template/footer.php");
?>
