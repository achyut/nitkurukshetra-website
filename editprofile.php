<?php
  session_start();
  $user = $_SESSION['user'];
  $id = $_SESSION['id'];
  if(!$id || $_SESSION['timeout'] + 10 * 60 < time()){
  session_destroy();
  header("location:institute.php?page=48");
  }

include("template/header.php");
?>

		
	<div class="belowContainer">
		
		<div class="centerBox profileBox">
		<?php
		if(isset($_POST['method']))
		{
		  $method = $_POST['method'];
		  $name =  $_POST['name'];
		  $quali = $_POST['quali'];
		  $desig = $_POST['desig'];
		  $exp = $_POST['exp'];
		  $dep = $_POST['dep'];
		  $resadd = $_POST['resadd'];
		  $rcharea = $_POST['rcharea'];
		  $indcst = $_POST['indcst'];
		  $awd = $_POST['awd'];
		  $other = $_POST['other'];
		  $offnum = $_POST['offnum'];
		  $mobnum = $_POST['mobnum'];
		  $email = $_POST['email'];
		  $result = updateFaculty($id,$name,$quali,$desig,$exp,$dep,$resadd,$rcharea,$indcst,$awd,$other,$offnum,$mobnum,$email);
		  if($result){
			echo "<h1><span class='success'>Profile Successfully Edited</span></h1>";
			echo "<a href='profile.php?faculty=$id'>View Profile</a>";
		  }
		  
		}
		else{
		$faculty = $_SESSION['id'];
		$faculty = cleanInput($faculty);
		if($faculty != NULL || $faculty!="" || $faculty!=" "){

			$data = getPersonalDetail($faculty);
		}
		else{
			$data = NULL;
		}
		if($data !=NULL){	
		?>
			<div class="photoBox">
				<img src="images/faculty/<?php echo $faculty.".jpg"; ?>" />	
			</div>
			<div class="infoBox">
			<form action="editprofile.php" method="post">
				<h2>Personal Details</h2>
				<span class="infoData">
				<strong>Name:&nbsp;&nbsp;</strong><input type="text" name="name" value="<?php echo $data[1]; ?>"/><br>
				<strong>Qualification:&nbsp;&nbsp;</strong><input type="text" name="quali" value="<?php echo $data[2]; ?>" /><br>
				<strong>Designation:&nbsp;&nbsp;</strong><input type="text" name="desig" value="<?php echo $data[3]; ?>" /><br>
				<strong>Experience (years):&nbsp;&nbsp;</strong><input class="expr" name="exp" type="text" value="<?php echo $data[9]; ?>" /><br>
				<strong>Department:&nbsp;&nbsp;</strong><input type="text" name="dep" value="<?php echo $data[4]; ?>" /><br>
				<strong>Residential Address:&nbsp;&nbsp;</strong><input class="redadd" name="resadd" type="text" value="<?php echo $data[5]; ?>" /><br>
				</span>
			</div>
			</div>
			<div class="clear"></div>
			<div class="infoData">
			<h2>Area of Research:</h2><textarea class="facData" name="rcharea"><?php echo $data[10]; ?></textarea><br>
			<h2>Industry Consultancy:</h2><textarea class="facData" name="indcst"><?php echo $data[11]; ?></textarea><br>
			<h2>Awards:</h2><textarea class="facData" name="awd"><?php echo $data[12]; ?></textarea><br>
			<h2>Other Details:</h2><textarea class="facData" name="other"><?php echo $data[13]; ?></textarea><br>
			<br>
			<strong>Office Phone Number:&nbsp;&nbsp;</strong><input type="text" name="offnum" value="<?php echo$data[6]; ?>" /><br>
			<strong>Mobile Number:&nbsp;&nbsp;</strong><input type="text" name="mobnum" value="<?php echo $data[7]; ?>" /><br>
			<strong>E-mail Address:&nbsp;&nbsp;</strong><input type="text" name="email" value="<?php echo $data[8]; ?>" /><br>
			<input type="hidden" name="method" value="submit" />
			<input type="hidden" name="factid" value="<?php echo $id; ?>" />
			<input type="submit" value="Save Profile" width:"30px" />
			
			</form>
			</div>
		<?php
			}
			else{
				echo "not found";
			}
			}
		
	?>
		</div>
	</div>
<?php
include("template/footer.php");
?>
