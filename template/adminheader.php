<?php
session_start();
$user = $_SESSION['admin'];
if(!$user){
header("location:index.php");
}
$dbconnect = "../include/dbconnect.php";
include ($dbconnect);
include("../include/functions.php");
	$pageId = $_GET["page"];
	if(!empty($pageId)){
		$query = "SELECT * FROM `pages` WHERE page_id = $pageId";
		$result = mysql_query($query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		}
		$num_rows = mysql_num_rows($result);
		if(!$num_rows){
			$pageTitle="";
			$pageDesc="National ../institute of Technology.";
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
		$pageDesc="National ../institute of Technology.";
		$pageContent = "oops The link seems to be broken";
	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?php echo $pageTitle;	?>NATIONAL INSTITUTE OF TECHNOLOGY,KURUKSHTERA</title>
	<meta name="description" content="<?php echo $pageDesc; ?>">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Strait|Sintony" />
	<link rel="stylesheet" href="../css/main.css"></link>
</head>
<body class="pageBg">
<a id="top"></a>
	<div class="mainBody">
	<div class="pageBg upperStripe">
		<div class="centerBox textPart">
			<span class="englishTitle"><a href="index.php">NATIONAL institute OF TECHNOLOGY, KURUKSHETRA</a></span><span class="hindiTitle"></span>
		</div>
	</div>
	<div class="logoContainer background">
		<div class="centerBox  downSpacing">
			<div class="logoContent">
				<span class="logo"></span>
				<span class="mainTitle"><span class="nitTitle">NIT</span><br><span class="kurukshetra">KURUKSHETRA</span></span>
			</div>
			<div class="menuContent">
				<form name="search" action="../search.php" class="searchBar">
					<input type="text" name="query" placeholder="SEARCH" />&nbsp;&nbsp;
					<input type="submit" value="GO" />
				</form>
				<div class="topMenu">
					<img src="../images/icon_interview.png"/>&nbsp;&nbsp;<a href="notices.php?type=interview">RECRUITMENT</a>&nbsp;&nbsp;&nbsp;<img src="../images/tender_bag.png"/>&nbsp;&nbsp;<a href="notices.php?type=tender">TENDERS</a>&nbsp;&nbsp;&nbsp;<img src="../images/login.png"/>&nbsp;&nbsp;<a href="#">LOGIN</a>
				</div>
			</div>
		</div>
	</div>
	<div class="background menu">
		<div class="centerBox">
		<ul id="menu">
      <li><a href="index.php">HOME</a></li>

      <li><a href="../institute.php?page=1">institute</a>
        <ul class="drop">
          <li><a href="../institute.php?page=1">institute Profile</a>
		  	<ul>
			  	<li><a href="../institute.php?page=6">Mission Statement</a></li>
				<li><a href="../institute.php?page=7">Campus</a></li>
				<li><a href="../institute.php?page=1">institute Profile</a></li>
				<li><a href="../institute.php?page=8">Adminsitration</a></li>
				<li><a href="../institute.php?page=9">Education system</a></li>
				<li><a href="../institute.php?page=10">Source of Funds</a></li>
				<li><a href="../institute.php?page=11">Honours and Awards</a></li>
				<li><a href="../institute.php?page=12">Industry institute collabration</a></li>
				<li><a href="../institute.php?page=19">Organizational Chart</a></li>
				<li><a href="../institute.php?page=27">Location</a></li>
			</ul>	  
		  </li>
          <li><a href="#">Administration</a>
              <ul>
                <li><a href="../institute.php?page=13">Governing Body</a></li>

                <li><a href="../institute.php?page=113">Finance Comtt.</a></li>
                <li><a href="../institute.php?page=114">Building &amp; Work</a></li>
                <li><a href="Senate.pdf">Senate</a></li>
                <li><a href="../institute.php?page=15">Chairperson</a></li>
                <li><a href="../institute.php?page=16">Director</a></li>

                <li><a href="../institute.php?page=18">DEans &amp; Officers</a></li>
                <li><a href="../institute.php?page=19">Org. Chart</a></li>
              </ul>
          </li>
          <li><a href="#">Facilities</a>

            <ul>
              <li><a href="../institute.php?page=20">Library</a></li>
              <li><a href="ccn/ccnnitk.htm">Center of Computing and Networking</a></li>
              <li><a href="../institute.php?page=21">Central Workshop</a></li>
              <li><a href="../institute.php?page=22">Online Ph.D Thesis</a></li>
              <li><a href="../institute.php?page=23">Hostels</a></li>

              <li><a href="../institute.php?page=24">Guest House</a></li>
              <li><a href="../institute.php?page=116">Physical Education</a></li>
              <li><a href="../institute.php?page=25">Games and Sports</a></li>
              <li><a href="../institute.php?page=26">Hospital, Bank, Post Office, Shopping Centre</a></li>
            </ul>
          </li>
          <li><a href="../institute.php?page=27">Location</a></li>

          <li><a href="../institute.php?page=11">Honours &amp; Awards</a></li>
          <li><a href="../institute.php?page=29">Service Rules</a></li>
        </ul>
      </li>

      <li><a href="#">DEPARTMENTS</a>
        <ul class="drop">
          <li><a href="../institute.php?page=42">Civil Engg.</a>
            <ul>
              <li><a href="../institute.php?page=44">Faculty</a></li>
              <li><a href="../institute.php?page=47">Laboratory</a></li>
              <li><a href="../institute.php?page=46">Research Projects</a></li>
            </ul>
          </li>
          <li><a href="../institute.php?page=130">Mechanical Engg.</a>
            <ul>
              <li><a href="../institute.php?page=96">Faculty</a></li>
              <li><a href="../institute.php?page=112">Laboratory</a></li>
              <li><a href="../institute.php?page=111">About IEM</a></li>
              <li><a href="../institute.php?page=64">Research Projects</a></li>
            </ul>
          </li>
          <li><a href="../institute.php?page=89">Electrical Engg.</a>
            <ul>
              <li><a href="../institute.php?page=90">Faculty</a></li>
              <li><a href="../institute.php?page=91">Program B.Tech</a></li>
              <li><a href="../institute.php?page=92">Program M.Tech</a></li>
              <li><a href="../institute.php?page=93">Program PhD.</a></li>
              <li><a href="../institute.php?page=95">Activities</a></li>
              <li><a href="../institute.php?page=94">Facilities</a></li>
            </ul>
          </li>
          <li><a href="../institute.php?page=85">E&C Engg.</a>

            <ul>
              <li><a href="../institute.php?page=86">Faculty</a></li>
              <li><a href="../institute.php?page=87">Laboratory</a></li>
              <li><a href="../institute.php?page=65">Research Projects</a></li>
              <li><a href="../institute.php?page=88">Ph.D Programmes</a></li>
            </ul>
          </li>

          <li><a href="../institute.php?page=82">Computer Engg.</a>
            <ul>
              <li><a href="../institute.php?page=83">Faculty</a></li>
              <li><a href="../institute.php?page=84">Laboratory</a></li>
            </ul>
          </li>
          <li><a href="../institute.php?page=80">Computer Application</a>

            <ul>
              <li><a href="../institute.php?page=81">Faculty</a></li>
            </ul>
          </li>
          <li><a href="DBA/index.htm">Business Administration</a>
            <ul>
			  <li><a href="../institute.php?page=79">Faculty</a></li>
            </ul>
          </li>
          <li><a href="../institute.php?page=77">Physics</a>
            <ul>
              <li><a href="../institute.php?page=78">Faculty</a></li>
              <li><a href="../institute.php?page=67">Research Projects</a></li>
            </ul>

          </li>
          <li><a href="../institute.php?page=151">Chemistry</a>
		  	<ul>
				<li><a href="../institute.php?page=152">Faculty</a></li>
				<li><a href="../institute.php?page=119">Research</a></li>
			</ul>
		  </li>
          <li><a href="../institute.php?page=75">Mathematics</a>
            <ul>
              <li><a href="../institute.php?page=76">Faculty</a></li>
              <li><a href="../institute.php?page=68">Research Projects</a></li>
            </ul>

          </li>
          <li><a href="../institute.php?page=72">Humanities</a>
            <ul>
              <li><a href="../institute.php?page=73">Faculty</a></li>
              <li><a href="../institute.php?page=74">Laboratory</a></li>
            </ul>
          </li>

        </ul>
      </li>
      <li><a href="#">ACADEMICS</a>
        <ul class="drop">
          <li><a href="">Courses</a>
            <ul>
              <li><a href="../institute.php?page=49">B.Tech</a></li>

              <li><a href="../institute.php?page=50">M.Tech</a></li>
              <li><a href="../institute.php?page=51">Ph.D</a></li>
              <li><a href="MBAProgram.htm">MBA</a></li>
            </ul>
          </li>
          <li><a href="../institute.php?page=53">Exam and Evaluation</a></li>
          <li><a href="../institute.php?page=54">Fees and Expenses</a></li>

          <li><a href="../institute.php?page=57">Scholarships</a></li>
          <li><a href="../institute.php?page=59">Admission</a></li>
          <li><a href="../institute.php?page=60">Foreign Students</a></li>
          <li><a href="Acadcal2010-11.pdf">Academic Calender</a></li>
          <li><a href="../institute.php?page=62">R & D</a>

            <ul>
              <li><a href="../institute.php?page=63">Civil Engg.</a></li>
              <li><a href="../institute.php?page=64">Mechanical Engg.</a></li>
              <li><a href="../institute.php?page=118">Electrical Engg.</a></li>
              <li><a href="../institute.php?page=65">E&C Engg.</a></li>
              <li><a href="../institute.php?page=66">Computer Engg.</a></li>

              <li><a href="../institute.php?page=67">Physics</a></li>
              <li><a href="../institute.php?page=119">Chemistry</a></li>
              <li><a href="../institute.php?page=68">Maths</a></li>
            </ul>
          </li>
        </ul>
      </li>

        <li><a href="about.htm">T&P CELL</a>
        
      </li>
      <li><a href="#">ACTIVITIES</a>
        <ul class="drop">
			<li><a href="#">TECHNICAL SOCIETIES</a>
				<ul>
					<li><a href="../institute.php?page=170">EMR (Robotics)</a></li>
					<li><a href="../institute.php?page=169">SAE (AUTOMOTIVE)</a></li>
					<li><a href="../institute.php?page=153">TECHNOBYTE</a></li>
					<li><a href="../institute.php?page=154">MECHSOC</a></li>
					<li><a href="../institute.php?page=155">ELECTRORECK</a></li>
					<li><a href="../institute.php?page=156">MICROBUS</a></li>
					<li><a href="../institute.php?page=158">INFRASTRUCTURE</a></li>
					<li><a href="../institute.php?page=168">AEROMODELLING</a></li>
					<li><a href="../institute.php?page=157">MEXPERTS</a></li>
				</ul>
			</li>
			<li><a href="#">CULTURAL CLUBS</a>
				<ul>
					<li><a href="../institute.php?page=167">FINE ARTS</a></li>
					<li><a href="../institute.php?page=166">PHOTOGRAPHY</a></li>
					<li><a href="../institute.php?page=172">MUSIC AND DRAMATICS</a></li>
					<li><a href="../institute.php?page=171">LIT & DEB</a></li>
				</ul>
			</li>
			<li><a href="#">EVENTS</a>
				<ul>
	              <li><a href="../institute.php?page=160">Techspardha</a></li>
				  <li><a href="../institute.php?page=161">Confluence</a></li>
				  <li><a href="../institute.php?page=162">Altius</a></li>
				  <li><a href="../institute.php?page=163">Utkarsh</a></li>
				  <li><a href="../institute.php?page=164">Auto-Kriti</a></li>
				  <li><a href="../institute.php?page=165">Sports Meet</a></li>
				</ul>
			</li>
          
        </ul>
      </li>
      <li><a href="../institute.php?page=121">OTHER NITS</a></li>
    </ul>
    <div class="clear"></div>
	</div>
	</div>

