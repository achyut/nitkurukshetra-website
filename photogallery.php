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
			while (false !== ($entry = readdir($handle))) {
				if ($entry != "." && $entry != ".." && $entry != "Thumbs.db") { 
					echo"<li><a href='photos.php?album=$path/$entry'>";
					if ($handle1 = opendir("$path/".$entry)) {
						$loop = 0;
						while (false !== ($entry1 = readdir($handle1)) && $loop!==1) {
							if ($entry1 != "." && $entry1 != ".." && $entry1 != "Thumbs.db") {
								echo"<img src='$path/$entry/$entry1' />";
								$loop++;
							}
						}
						closedir($handle1);
					}
					echo"</a><span>$entry</span></li>";
				}
			}
			closedir($handle);
		}
		}

		?>
		<h2>Photos of college and surroundings</h2>
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
