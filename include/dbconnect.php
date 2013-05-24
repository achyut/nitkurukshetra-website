<?php
$dbhost = "localhost";
$dbuser = "achyut";
$dbpass = "tuyhca";
$dbname = "nitk";
$link = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db($dbname, $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
function printErrorMessage(){
	echo"<h1 class='error'>Oops Some error occured!!!</h1>";
}
?>

