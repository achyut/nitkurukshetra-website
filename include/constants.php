<?php
$url .= $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
// echo the URL
echo $url;
$css = $url."/css";
$images = $url."/images";
$scripts = $url."/js";
$include = $url."/include";
$template = $url."/template";
$dbconnect = $include."/dbconnect.php";
?>
