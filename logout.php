<?php
session_start();
session_destroy();
echo "Successfully Logged out";
header("location:index.php");
?>
