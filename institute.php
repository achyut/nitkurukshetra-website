<?php
	include("template/header.php");
?>
<?php
		$mode = "view";
		$mode = cleanInput($mode);
		$template = $data[5];
	?>
	<div class="belowContainer">
		
		<div class="centerBox">
			<?php 
				if($template=="full"){
					echo "<div class = 'mainContent fullContent'>";
							echo $data[3];
					echo "</div>";
				}
				else if($template =="profile"){
				
				}
				else if($template =="department"){
					?>
					<div class="mainContent">
						<div class="deptContent">
							<?php echo $data[3]; ?>
						</div>
						<div class="deptSideNav">
							<ul class="deptSideList">
								<?php displayPageTitle($data[4],$mode); ?>
								<li><a href="gallery.php">Photo Gallery</a></li>
							</ul>
						</div>
					
					</div>
					<?php
				}
				else if($template=="login"){
					?>
					<div class = 'mainContent fullContent'>
							<?php
								echo $data[3];
							?>
					</div>
				<?php
				}
				else{
					echo "<div class='sideBar'>";
						echo"<ul class='sideNav'>";
							displayPageTitle($data[4],$mode);
						echo"</ul>";
					echo"</div> <!-- sidenav ends -->	";
					echo"<div class = 'mainContent'>";
						echo $data[3];
					echo"</div>";
				}
			?>
			
			
			
			
		</div>
	</div>
<?php
	include("template/footer.php");
?>
