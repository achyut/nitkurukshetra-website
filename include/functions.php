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
function getSearchResults($keyword){
	$query = "SELECT event.evnt_title AS title,'evnt' AS TYPE,event.evnt_id as id,event.evnt_url as url,event.evnt_file as file FROM event WHERE event.evnt_title LIKE '%".$keyword."%' UNION	SELECT faculty.name AS title,'fact' AS TYPE,faculty.cdno as id,'url' as url,'file' as file FROM faculty WHERE faculty.name LIKE '%".$keyword."%' UNION	SELECT news.news_title AS title,'news' AS TYPE,news.news_id as id,news.news_url as url,news.news_file as file FROM news WHERE news.news_title LIKE '%".$keyword."%' 	UNION SELECT notice.notice_title AS title,'notice' AS TYPE,notice.notice_id as id,notice.notice_url as url,notice.notice_file as file FROM notice WHERE notice.notice_title LIKE '%".$keyword."%' UNION SELECT scrollnews.scroll_title AS title,'scroll' AS TYPE,scrollnews.scroll_id as id,scrollnews.scroll_url as url,scrollnews.scroll_file as file FROM scrollnews WHERE scrollnews.scroll_title LIKE '%".$keyword."%' UNION SELECT stdact.stdact_title AS title,'stdact' AS TYPE,stdact.stdact_id as id,stdact.stdact_url as url,stdact.stdact_file as file FROM stdact WHERE stdact.stdact_title LIKE '%".$keyword."%' UNION SELECT tender.tndr_title AS title,'tender' AS TYPE,tender.tndr_id as id,tender.tndr_url as url,tender.tndr_file as file FROM tender WHERE tender.tndr_title LIKE '%".$keyword."%' UNION SELECT walkin.wlk_title AS title,'walkin' AS TYPE,walkin.wlk_id as id,walkin.wlk_url as url,walkin.wlk_file as file FROM walkin WHERE walkin.wlk_title LIKE '%".$keyword."%' UNION SELECT pages.page_title AS title,'page' AS TYPE,pages.page_id as id,'hello' as url,'asdf' as file FROM pages WHERE pages.page_title LIKE '%".$keyword."%'";	
	$result = executeQuery($query);
	return $result;
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
		$query = "SELECT * FROM `pages` WHERE page_id = '$pageId' ORDER BY page_title";
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
			$data[4]="";
			$data[5]="";
			return $data;
		}
		else{
			$row = mysql_fetch_row($result);
			return $row;
		}
	}
	else{
		$data[1] = "";
		$data[2]="National Institute of Technology.";
		$data[3]="Oops the page cannot be found";
		$data[4]="";
		$data[4]="department";
		return $data;

	}	
}
function displayPageTitle($pageLinks,$mode){
		$result = executeQuery("SELECT page_id,page_title FROM pages ORDER BY page_id DESC");
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
	$result = executeQuery("SELECT page_id,page_title FROM pages ORDER BY page_id DESC");
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
		$count = 0;
		while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
			$id = $row[0];
			$title = $row[1];
			echo "<li><input type='checkbox' name='pageLink[]' value='$id'/>$title</li>";
		}
		echo "<li><input type='checkbox' name='pageLink[]' value='133' checked/>Photo Album</li>";
	}
	
}

	function getResults($type,$table,$scut,$limit,$resultType,$action,$front=false){
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
							$linkType = $row[5];
							if($resultType=="short"){
								if($linkType=="file"){
									if($front == true){
									echo "<li><a href='files/$url'>$shTitle</a>&nbsp;&nbsp;";
									}
									else{
									echo "<li><a href='../files/$url'>$shTitle</a>&nbsp;&nbsp;";
									}
								}
								else{
									echo "<li><a href='$url'>$shTitle</a>&nbsp;&nbsp;";
								}
								
								if($new=="true" && $action!="true"){echo"<span class='blink'>NEW</span>&nbsp;&nbsp;</li>";}
							}
							else{
								if($linkType=="file"){
									if($front == true){
										echo "<li><a href='files/$url'>$title</a>&nbsp;&nbsp;";
									}
									else{
										echo "<li><a href='../files/$url'>$title</a>&nbsp;&nbsp;";
									}
								}
								else{
									echo "<li><a href='$url'>$title</a>&nbsp;&nbsp;";
								}
								
							if($new=="true"){echo"<span class='blink'>NEW</span>&nbsp;&nbsp;";}
							if($action=="true"){
							echo"<a href='addnotice.php?mode=edit&&id=$id&&type=$type'>";
							echo"<img src='../images/edit.png' /></a>&nbsp;&nbsp;<a href='deletenotice.php?id=$id&&type=$type&&confirm='><img src='../images/delete.png' /></a></li>";
							}
							
							}
							
						}
					}
					
function getData($table,$id,$sub){
	$query = 'SELECT * FROM '.$table.' WHERE '.$sub.'id ='.$id;
	$result = mysql_query($query);
	if (!$result) {
		die('Invalid query: ' . mysql_error());
	}
	$num_rows = mysql_num_rows($result);
	if(!$num_rows){
		echo "oops id not found";
		$title="";
		$shTitle="";
		$url="";
	}
	else{
		$row = mysql_fetch_row($result);
		//var_dump($row);
		return $row;

	}
}

function submitFeedback($name,$email,$message,$ipaddress){
	$query = "INSERT INTO feedback(name,email,message,ipaddress) values('$name','$email','$message','$ipaddress')";
	$result = executeQuery($query);
	return $result;
}
function createUser($username,$password,$usercreated){
	$password = md5($password);
	$query = "INSERT INTO login (login_username,login_password,login_created)values('$username','$password','$usercreated')";
	$result = executeQuery($query);
	return $result;
}
function editUser($userid,$username,$password,$created){
	if($password=="     "){
	$query = "UPDATE login SET login_username='$username',login_created='$created' WHERE login_id='$userid'";
	}
	else{
	$password = md5($password);
	$query = "UPDATE login SET login_username='$username',login_password='$password',login_created='$created' WHERE login_id='$userid'";
	}
	
	$result = executeQuery($query);
	return $result;
}
function getAllUsers(){
	$query = "select * from login";
	$result = executeQuery($query);
	echo"User name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Added By<br>";
	echo"<ul>";
	
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		$id = $row[0];
		$user = $row[1];
		$pass = "hidden";
		$addedby = $row[3];
		echo "<li>$user &nbsp;&nbsp;&nbsp;&nbsp;$pass&nbsp;&nbsp;&nbsp;&nbsp;$addedby &nbsp;&nbsp;<a href='user.php?action=edit&&id=$id'><img src='../images/edit.png'/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='user.php?action=delete&&id=$id'><img src='../images/delete.png'/></a></li>";
	}
	echo"</ul>";
}
function deleteUser($id){
	$query = "delete from login where login_id ='$id'";
	$result = executeQuery($query);
	return $result;
}
function getUserDetail($id){
	$query = "select * from login where login_id ='$id'";
	$result = executeQuery($query);
	return $result;
}
function filterFeedback($input){
	$input = escapeQuote($input);
	$input = htmlentities($input);
	return $input;
}
function cleanInput($input){
	$input = preg_replace("/[^0-9a-zA-Z]/","", $input);
  	if($input ==NULL) $input = NULL;
  	else if($input == '') $input = 1;

  	return $input;
}

function clean_directory($input){
	$input = preg_replace("/[^0-9a-zA-Z\w]/","", $input);
	return $input;
}
function escapeQuote($input){
	return mysql_real_escape_string($input);
}