<?php
	$_GET['page'] = 0;
	include("template/header.php");
?>
<div class="belowContainer">
<div class="centerBox">
<?php
	$name = $_POST['name'];
	$name = filterFeedback($name);
	$email = $_POST['email'];
	$email = filterFeedback($email);
	$message = $_POST['feedbacktext'];
	$message = filterFeedback($message);
	$ipaddress = $_SERVER['HTTP_HOST'];
	if(!submitFeedback($name,$email,$message,$ipaddress)){
		echo"<h1 class='error'>OOPS Your feedback cannot be submitted at the moment!!</h1>";
	}
	else{
		echo"<h1 class='success'>Thank you for your valuable Feedback!!</h1>";
	}
?>
</div>
</div>
<?php
	include("template/footer.php");
?>