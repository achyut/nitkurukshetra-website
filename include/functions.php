<?php

function executeQuery($query){
	$result = mysql_query($query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		}
		else{
			return $result;
		}
	
}
function getPersonalDetail($facid){
	if($facid==""||$facid==NULL||$facid==''){
		return NULL;
	}
	$query = "SELECT * FROM faculty WHERE cdno = '$facid' LIMIT 1";
	$result = executeQuery($query);
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		return $row;		
		}
}

function showPageDetails($pageId){
	if(!empty($pageId)){
		$query = "SELECT * FROM `pages` WHERE pageId = '$pageId' ORDER BY pageTitle";
		$result = mysql_query($query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		}
		$num_rows = mysql_num_rows($result);
		if(!$num_rows){					
			$data = "";
			$data[1]="";
			$data[2]="National Institute of Technology.";
			$data[3]= "Requested page cannot be found";
			return $data;
		}
		else{
			$row = mysql_fetch_row($result);
			return $row;
		}
	}
	else{
		$data = "";
		$data[2]="National Institute of Technology.";
		return $data;

	}	
}
function displayPageTitle($pageLinks,$mode){
		$result = executeQuery("SELECT pageId,pageTitle FROM pages ORDER BY pageId DESC");
		$pageLink = json_decode($pageLinks);
		while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
			$id = $row[0];
			$title = $row[1];
			if($pageLink!=NULL){
				if(in_array($id,$pageLink)){
					echo "<li><a href='institute.php?page=$id'/>$title</a></li>";
				}
			}
			
			
		}
}
function editPageTitle($pageLinks,$mode){
	$result = executeQuery("SELECT pageId,pageTitle FROM pages ORDER BY pageId DESC");
	if($mode == "edit"){
		$pageLink = json_decode($pageLinks);
		while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
			$id = $row[0];
			$title = $row[1];
			if($pageLink!=NULL){
				if(in_array($id,$pageLink)){
					echo "<li><input type='checkbox' name='pageLink[]' value='$id' checked/>$title</li>";
				}
				else{
				echo "<li><input type='checkbox' name='pageLink[]' value='$id'/>$title</li>";
				}
			}
			else{
				echo "<li><input type='checkbox' name='pageLink[]' value='$id'/>$title</li>";
			}
			
						
		}
	}
	else{
		while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
			$id = $row[0];
			$title = $row[1];
			echo "<li><input type='checkbox' name='pageLink[]' value='$id'/>$title</li>";
		}
	}
	
}

	function getResults($type,$table,$scut,$limit,$resultType,$action){
						if($resultType=="short"){
							$query = "SELECT * FROM ".$table." ORDER by ".$scut."id DESC LIMIT ".$limit;
						}
						else{
							$query = "SELECT * FROM ".$table." ORDER by ".$scut."id DESC";
						}
						$result = mysql_query($query);
						if (!$result) {
							die('Invalid query: ' . mysql_error());
						}
						
						while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
							$id = $row[0];
							$title = $row[1];
							$url = $row[2];
							$shTitle = $row[3];
							$new = $row[4];
							if($resultType=="short"){
								echo "<li><a href='$url'>$shTitle</a>&nbsp;&nbsp;";
								if($new=="true" && $action!="true"){echo"<span class='blink'>NEW</span>&nbsp;&nbsp;</li>";}
							}
							else{
							echo "<li><a href='$url'>$title</a>&nbsp;&nbsp;";
							if($new=="true"){echo"<span class='blink'>NEW</span>&nbsp;&nbsp;";}
							if($action=="true"){
							echo"<a href='addnotice.php?mode=edit&&id=$id&&type=$type'>";
							echo"<img src='../images/edit.png' /></a>&nbsp;&nbsp;<a href='deletenotice.php?id=$id&&type=$type'><img src='../images/delete.png' /></a></li>";
							}
							
							}
							
						}
					}
					
					
function cleanInput($input){
	$input = preg_replace("/[^0-9a-zA-Z]/","", $input);
  	if($input ==NULL) $input = NULL;
  	else if($input == '') $input = 1;

  	return $input;
}
