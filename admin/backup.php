<?php
	include('../template/adminheader.php');
	$name  = date('m-d-Y_h-i-s-a', time());
	$backCmd = "mysqldump -p".$dbpass." -u"." achyut ".$dbname." >'$name.sql'";
	$dbcn = exec($backCmd);
	$name = "\./".$name.".sql";
	echo $dbcn;
$content = file_get_contents($name,FILE_USE_INCLUDE_PATH);

die();
	echo "<textarea class='dump'>$content</textarea>";
?>
