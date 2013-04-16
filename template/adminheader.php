<?php
$dbconnect = "../include/dbconnect.php";
include ($dbconnect);
	$pageId = $_GET["page"];
	if(!empty($pageId)){
		$query = "SELECT * FROM `pages` WHERE pageId = $pageId";
		$result = mysql_query($query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		}
		$num_rows = mysql_num_rows($result);
		if(!$num_rows){
			$pageTitle="";
			$pageDesc="National Institute of Technology.";
			$pageContent = "The requested page cannot be found";
		}
		else{
			$row = mysql_fetch_row($result);
			//var_dump($row);
			$pageTitle=$row[1]." | ";
			$pageDesc = $row[2];
			$pageContent = $row[3];
		}
	}
	else{
	
		$pageTitle="";
		$pageDesc="National Institute of Technology.";
		$pageContent = "oops The link seems to be broken";
	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?php echo $pageTitle;	?>NATIONAL INSTITUTE OF TECHNOLOGY,KURUKSHTERA</title>
	<meta name="description" content="<?php echo $pageDesc; ?>">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Strait|Roboto+Condensed|Sintony" />
	<link rel="stylesheet" href="../css/main.css"></link>
</head>
<body>
	<div class="mainBody">
	<div class="background upperStripe">
		<div class="centerBox textPart">
			<span class="englishTitle">NATIONAL INSTITUTE OF TECHNOLOGY, KURUKSHETRA</span><span class="hindiTitle">रास्ट्रीय प्रद्योगिकी सस्थान, कुरुक्षेत्र</span>
		</div>
	</div>
	<div class="logoContainer background">
		<div class="centerBox  downSpacing">
			<div class="logoContent">
				<img src="../images/logo.png" class="logo" />
				<span class="mainTitle"><span class="nitTitle">NIT</span><br><span class="kurukshetra">KURUKSHETRA</span></span>
			</div>
			<div class="menuContent">
				<form name="search" action="#" class="searchBar">
					<input type="text" placeholder="SEARCH" />&nbsp;&nbsp;
					<input type="submit" value="GO" />
				</form>
				<div class="topMenu">
					<img src="images/interview.png"/>&nbsp;&nbsp;<a href="#">RECRUITMENT</a>&nbsp;&nbsp;&nbsp;<img src="images/tender.png"/>&nbsp;&nbsp;<a href="#">TENDERS</a>&nbsp;&nbsp;&nbsp;<img src="images/mail.png"/>&nbsp;&nbsp;<a href="#">WEBMAIL</a>
				</div>
			</div>
		</div>
	</div>
	<div class="background menu">
		<ul class="menuBar">
			<li><a>HOME</a>
			<!--
				<ul>
				    <li><a href="#">Item 01</a></li>
				    <li><a href="#" class="selected">Item 02</a></li>
				    <li><a href="#">Item 03</a></li>
				</ul>
				<div class="clear"></div>
				-->
			</li>
			<li><a>INSTITUTE</a></li>
			<li><a>DEPARTMENTS</a></li>			
			<li><a>ACADEMICS</a></li>
			<li><a>TEQIP</a></li>
			<li><a>AICTE INFO</a></li>
			<li><a>OTHER NITS</a></li>		
		</ul>
	</div>
	
