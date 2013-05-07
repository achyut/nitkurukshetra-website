<?php
//include('constants.php');

// Create connection
$link = mysql_connect("localhost", "achyut", "tuyhca");
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db("nitk", $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
function printErrorMessage(){
	echo"<h1 class='error'>Oops Some error occured!!!</h1>";
}
?>
