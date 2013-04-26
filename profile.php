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
		
		<div class="centerBox profileBox">
		<?php
		if($data !=NULL){	
		?>
		
			<div class="photoBox">
				<img src="images/faculty/profile.jpg" />	
			</div>
			<div class="infoBox">
				<h2>Personal Details</h2>
				<span class="infoData">
				<strong>Name:&nbsp;&nbsp;</strong><?php echo $data[1]; ?><br>
				<strong>Qualification:&nbsp;&nbsp;</strong><?php echo $data[2]; ?><br>
				<strong>Designation:&nbsp;&nbsp;</strong><?php echo $data[3]; ?><br>
				<strong>Experience (years):&nbsp;&nbsp;</strong><?php echo $data[9]; ?><br>
				<strong>Department:&nbsp;&nbsp;</strong><?php echo $data[4]; ?><br>
				<strong>Residential Address:&nbsp;&nbsp;</strong><?php echo $data[5]; ?><br>
				</span>
			</div>
			<div class="clear"></div>
			<div class="infoData">
			<h2>Area of Research:</h2><?php echo $data[10]; ?><br>
			<h2>Industry Consultancy:</h2><?php echo $data[11]; ?><br>
			<h2>Awards:</h2><?php echo $data[12]; ?><br>
			<h2>Other Details:</h2><?php echo $data[13]; ?><br>
			<br>
			<strong>Office Phone Number:&nbsp;&nbsp;</strong><?php echo $data[6]; ?><br>
			<strong>Mobile Number:&nbsp;&nbsp;</strong><?php echo $data[7]; ?><br>
			<strong>E-mail Address:&nbsp;&nbsp;</strong><?php echo $data[8]; ?><br>
			</div>
		<?php
			}
			else{
				echo "not found";
			}
		
	?>
		</div>
	</div>
<?php
	include("template/footer.php");
?>
