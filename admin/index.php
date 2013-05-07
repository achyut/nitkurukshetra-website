<?php
session_start();
if(isset($_SESSION['user'])){
header("location:index1.php");
}
?>
	<div class="belowContainer">
		<div class="centerBox">
			<h1>Administrative area</h1>
			<fieldset>
				<legend>Login:</legend>
				<form action="checklogin.php" method="post">
				Username: <input type="text" size="30" name="user" required><br>
				Password: <input type="password" size="30" name="pass" required><br>
				<input type="submit" value="Login">
				</form>
			  </fieldset>
		</div>
	</div>
