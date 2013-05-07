<?php
	include("../include/dbconnect.php");
	include("../include/functions.php");
	$username = $_POST['user'];
	$pass = $_POST['pass'];
	$username = cleanInput($username);
	$pass = cleanInput($pass);
	
	function checkLogin($username,$password){
		$password = md5($password);
		$query = "select login_username from login where login_username='$username' and login_password='$password'";
		$result = executeQuery($query);
		$count=mysql_num_rows($result);
		if($count==1){
			session_start();
			$_SESSION['user'] = $username;
//			session_register(username);
			header("location:index1.php");
		}
		else{
			header("location:index.php");
		}
	}
	checkLogin($username,$pass);
?>