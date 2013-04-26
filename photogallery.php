<?php
	include("template/header.php");
?>
<?php
		$faculty = $_GET["faculty"];
		$faculty = cleanInput($faculty);
		if($faculty != NULL || $faculty!="" || $faculty!=" "){

			$data = getPersonalDetail($faculty);
		}
		else{
			$data = NULL;
		}
		?>
		
	<div class="belowContainer">
		
		<div class="centerBox">
		<h1>Photo Gallery</h1>
		<ul class="albumList">
			<li><a href="#"><img src="images/NIT_KURUKSHETRA_07.jpg" /></a><span>Techspardha</span></li>
			<li><a href="#"><img src="images/NIT_KURUKSHETRA_07.jpg" /></a><span>Confluence</span></li>
			<li><a href="#"><img src="images/NIT_KURUKSHETRA_07.jpg" /></a><span>Academic Building</span></li>
			<li><a href="#"><img src="images/NIT_KURUKSHETRA_07.jpg" /></a><span>Academic Building</span></li>
			<li><a href="#"><img src="images/NIT_KURUKSHETRA_07.jpg" /></a><span>Academic Building</span></li>
			<li><a href="#"><img src="images/NIT_KURUKSHETRA_07.jpg" /></a><span>Academic Building</span></li>
			<li><a href="#"><img src="images/NIT_KURUKSHETRA_07.jpg" /></a><span>Academic Building</span></li>
			<li><a href="#"><img src="images/NIT_KURUKSHETRA_07.jpg" /></a><span>Academic Building</span></li>
		</ul>
		</div>
	</div>
<?php
	include("template/footer.php");
?>
