<?php
$dbconnect = "../include/dbconnect.php";
include ($dbconnect);
include("../include/functions.php");
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
<a id="top"></a>
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
					<img src="images/interview.png"/>&nbsp;&nbsp;<a href="notices.php?type=interview">RECRUITMENT</a>&nbsp;&nbsp;&nbsp;<img src="images/tender.png"/>&nbsp;&nbsp;<a href="notices.php?type=tender">TENDERS</a>&nbsp;&nbsp;&nbsp;<img src="images/mail.png"/>&nbsp;&nbsp;<a href="#">WEBMAIL</a>
				</div>
			</div>
		</div>
	</div>
	<div class="menu">
		<div class="centerBox">
		<ul id="menu">
      <li><a href="index.php">HOME</a></li>

      <li><a href="">INSTITUTE</a>
        <ul class="drop">
          <li><a href="InstituteProfile.htm">Institute Profile</a></li>
          <li><a href="#">Administration</a>
            <div>
              <ul>
                <li><a href="BOGmembers.htm" target="_blank">Governing Body</a></li>

                <li><a href="financecom.htm" target="_blank">Finance Comtt.</a></li>
                <li><a href="buildingworkcom.htm" target="_blank">Building &amp; Work</a></li>
                <li><a href="Senate.pdf" target="_blank">Senate</a></li>
                <li><a href="chairman.htm" target="_blank">Chairperson</a></li>
                <li><a href="Director.htm" target="_blank">Director</a></li>

                <li><a href="Deans&amp;Officers.htm" target="_blank">DEans &amp; Officers</a></li>
                <li><a href="OrgChart.htm" target="_blank">Org. Chart</a></li>
              </ul>
            </div>
          </li>
          <li><a href="#">Facilities</a>

            <ul>
              <li><a href="about_library.htm">Library</a></li>
              <li><a href="ccn/ccnnitk.htm">Center of Computing and Networking</a></li>
              <li><a href="Workshop.htm">Central Workshop</a></li>
              <li><a href="phd_thesis.htm">Online Ph.D Thesis</a></li>
              <li><a href="Hostels.htm">Hostels</a></li>

              <li><a href="GuestHouse.htm">Guest House</a></li>
              <li><a href="sp.htm">Physical Education</a></li>
              <li><a href="gameandsports.htm">Games and Sports</a></li>
              <li><a href="officeandcentre.htm">Hospital, Bank, Post Office, Shopping Centre</a></li>
            </ul>
          </li>
          <li><a href="HowtoReach.htm" target="_blank">Location</a></li>

          <li><a href="Honours&amp;Awards.htm" target="_blank">Honours &amp; Awards</a></li>
          <li><a href="ServiceRules.htm" target="_blank">Service Rules</a></li>
          <li><a href="feedback.aspx" target="_blank">Feedback</a></li>
          <li><a href="Login.aspx" target="_blank">Login</a></li>
        </ul>
      </li>

      <li><a href="#">DEPARTMENTS</a>
        <ul class="drop">
          <li><a href="CivilMain.htm">Civil Engg.</a>
            <ul>
              <li><a href="FacCivil.htm">Faculty</a></li>
              <li><a href="LabCivil.htm">Laboratory</a></li>
              <li><a href="ProjectsCivil.htm">Research Projects</a></li>

            </ul>
          </li>
          <li><a href="MechMain.htm">Mechanical Engg.</a>
            <ul>
              <li><a href="FacMech.htm">Faculty</a></li>
              <li><a href="LabMech.htm">Laboratory</a></li>
              <li><a href="About%20IEM.htm">About IEM</a></li>

              <li><a href="ProjectsMech.htm">Research Projects</a></li>
            </ul>
          </li>
          <li><a href="http://nitkkr.ac.in/ElecMain.htm">Electrical Engg.</a>
            <ul>
              <li><a href="facElec.htm">Faculty</a></li>
              <li><a href="PrgBTElec.htm">Program B.Tech</a></li>

              <li><a href="PrgPhDElec.htm">Program PhD.</a></li>
              <li><a href="FacilElec.htm">Activities</a></li>
              <li><a href="FacilElec.htm">Facilities</a></li>
            </ul>
          </li>
          <li><a href="EandCMain.htm">E&C Engg.</a>

            <ul>
              <li><a href="FacEandC.htm">Faculty</a></li>
              <li><a href="LabEandC.htm">Laboratory</a></li>
              <li><a href="ProgPhdEC.htm">Research Projects</a></li>
              <li><a href="ProjectsEandC.htm">Ph.D Programmes</a></li>
            </ul>
          </li>

          <li><a href="CompMain.htm">Computer Engg.</a>
            <ul>
              <li><a href="FacComp.htm">Faculty</a></li>
              <li><a href="LabComp.htm">Laboratory</a></li>
            </ul>
          </li>
          <li><a href="mcamain.htm">Computer Application</a>

            <ul>
              <li><a href="Facmca.htm">Faculty</a></li>
            </ul>
          </li>
          <li><a>Business Administration</a>
            <ul>
              <li><a href="DBA/index.htm">Home</a></li>

            </ul>
          </li>
          <li><a href="PhyMain.htm">Physics</a>
            <ul>
              <li><a href="FacPhy.htm">Faculty</a></li>
              <li><a href="ProjectsPhy.htm">Research Projects</a></li>
            </ul>

          </li>
          <li><a href="ChemMain.htm">Chemistry</a></li>
          <li><a href="MathsMain.htm">Mathematics</a>
            <ul>
              <li><a href="FacMaths.htm">Faculty</a></li>
              <li><a href="ProjectsMaths.htm">Research Projects</a></li>
            </ul>

          </li>
          <li><a href="HSSMain.htm">Humanities</a>
            <ul>
              <li><a href="FacHSS.htm">Faculty</a></li>
              <li><a href="LabHSS.htm">Laboratory</a></li>
            </ul>
          </li>

        </ul>
      </li>
      <li><a href="http://nitkkr.ac.in/null">ACADEMICS</a>
        <ul class="drop">
          <li><a href="">Courses</a>
            <ul>
              <li><a href="BTProgram.htm">B.Tech</a></li>

              <li><a href="MTProgram.htm">M.Tech</a></li>
              <li><a href="PHDProgramme2008.htm">Ph.D</a></li>
              <li><a href="MBAProgram.htm">MBA</a></li>
            </ul>
          </li>
          <li><a href="exameval.htm">Exam and Evaluation</a></li>
          <li><a href="Fees.htm">Fees and Expenses</a></li>

          <li><a href="schol.htm">Scholarships</a></li>
          <li><a href="admission.htm">Admission</a></li>
          <li><a href="SchemeDetial2009-10.htm">Scheme</a></li>
          <li><a href="Foreignfees.htm">Foreign Students</a></li>
          <li><a href="Acadcal2010-11.pdf">Academic Calender</a></li>
          <li><a href="InstituteR&D.htm">R & D</a>

            <ul>
              <li><a href="ProjectsCivil.htm">Civil Engg.</a></li>
              <li><a href="ProjectsMech.htm">Mechanical Engg.</a></li>
              <li><a href="PrgPhdElec.htm">Electrical Engg.</a></li>
              <li><a href="ProjectsEandC.htm">E&C Engg.</a></li>
              <li><a href="CompMain.htm">Computer Engg.</a></li>

              <li><a href="ProjectsPhy.htm">Physics</a></li>
              <li><a href="ChemMain.htm">Chemistry</a></li>
              <li><a href="ProjectsMaths.htm">Maths</a></li>
            </ul>
          </li>
        </ul>
      </li>

        <li><a href="about.htm">TEQIP</a>
        <ul class="drop">
          <li><a href="about.htm">About</a></li>
          <li><a href="teqipbasicinfo.htm">Institute Info</a></li>
          <li><a href="teqipfinancial2009.htm">Financial Status</a></li>

        </ul>
      </li>
      <li><a href="aicteinfo.htm">AICTE INFO</a>
        <ul class="drop">
          <li><a href="aictecivil.htm">Civil</a></li>
          <li><a href="aictemech.htm">Mechanical</a></li>
          <li><a href="aicteelec.htm">Electrical</a></li>

          <li><a href="aicteeandc.htm">E&C </a></li>
        </ul>
      </li>
      <li><a href="OtherNITs.htm">OTHER NITS</a></li>
    </ul>
    <div class="clear"></div>
	</div>
	</div>

