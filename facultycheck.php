<?php
	include("include/dbconnect.php");
	include("include/functions.php");
	function showForm(){
	?>
			<form action="facultycheck.php" method="post" name="facultylogin">
			<table border="0" cellpadding="1" cellspacing="1" style="height:121px; width:149px">
				<tbody>
					<tr>
					</tr>
					<tr>
						<td>
						<p>Username:<input name="username" maxlength="20" size="20" type="text" /></p>

						<p>Password:<input maxlength="20" name="password" size="20" type="password" /></p>

						<p><input name="Login" type="submit" value="Login" /></p>
						</td>
					</tr>
				</tbody>
			</table>
			</form>
	
	<?php
	}
	function checkLogin($username,$password){
		//$password = md5($password);
		$query = "select cdno from faculty where username='$username' and password='$password'";
		$result = executeQuery($query);
		$count=mysql_num_rows($result);
		if($count==1){
			session_start();
			$_SESSION['user'] = $username;
			$result = mysql_fetch_array($result, MYSQL_NUM);
			$_SESSION['id'] = $result[0];
			$_SESSION['timeout'] = time();
			header("location:editprofile.php");
		}
		else{
 			echo "incorrect password";
 			showForm();
		}
	}
	if(isset($_POST['username'])&&isset($_POST['password'])){
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$username = cleanInput($username);
	$pass = cleanInput($pass);
	checkLogin($username,$pass);
	}
	else if(isset($_SESSION['id'])){
	  $id = $_SESSION['id'];
	  header("location:profile.php?faculty=$id");
	}
	else if(!isset($_SESSION['id']) || ($_SESSION['timeout'] + 10 * 60 < time())){
	    showForm();
    }
	else{
	showForm();
	}
?>