<?php
	$_GET['page'] = 0;
	include("template/header.php");
?>
<div class="belowContainer">
	<div class="centerBox">
	<?php
		$keyword = $_GET['query'];
			$keyword = cleanInput($keyword);
		?>
		<h1>Search Results for: <?php echo $keyword ?></h1>
		<?php
		function displaySearchData($data,$page){
			if($page==true){
				echo "<li><a href='institute.php?page=$data[2]'>$data[0]</a></li>";		
			}
			else{
				if($data[4]=="file"){
					echo "<li><a href='files/$data[3]'>$data[0]</a></li>";
				}
				else if($data[4]=="url"){
					echo "<li><a href='$data[3]' target='_blank'>$data[0]</a></li>";
				}
				else{
					echo "<li>$data[0]</li>";
				}
			}
			
		}
			if(empty($keyword)){
				?>
					<div class="error">OOPS!!! Incorrect keyword to search</div>
				<?php
			}
			else{
				$result = getSearchResults($keyword);
				$num = mysql_num_rows($result);
				if($num){
					$faculty = array();
					$factCount = 0;
					
					$news = array();
					$newsCount =0;
					
					$event = array();
					$eventCount =0;
					
					$tender = array();
					$tenderCount = 0;
					
					$page = array();
					$pageCount =0;
					
					$scrollnews = array();
					$scrollCount =0;
					
					$stdact = array();
					$stdactCount = 0;
					
					$walkin= array();
					$walkinCount = 0;
					
					$notice= array();
					$noticeCount = 0;
					while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
						$title = $row[0];
						$type = $row[1];
						$id = $row[2];
						$url = $row[3];
						$file = $row[4];
						if($type == "fact"){
							array_push($faculty,$row);
							$factCount++;
						}
						else if($type=="news"){
							array_push($news,$row);
							$newsCount++;
						}
						else if($type =="evnt"){
							array_push($event,$row);
							$eventCount++;
						}
						else if($type=="notice"){
							array_push($notice,$row);
							$noticeCount++;
						}
						else if($type=="scroll"){
							array_push($scrollnews,$row);
							$scrollCount++;
						}
						else if($type=="stdact"){
							array_push($stdact,$row);
							$stdactCount++;
						}
						else if($type=="tender"){
							array_push($tender,$row);
							$tenderCount++;
						}
						else if($type =="page"){
	//						array_push($faculty,$id,$title,$url,$file);
							array_push($page,$row);
							$pageCount++;
						}
						else if($type =="walkin"){
							array_push($walkin,$row);
							$walkinCount++;
						}
						//echo $id;
						//echo"<br>";
						
					}
					if($factCount!=0){
					echo "<div>";
						echo "<strong>".$factCount ." Faculties found with keyword \"$keyword\" in their name</strong>";
						echo "<ul class='albumList facultySearch'>";
						foreach($faculty as $data){
							echo "<li><a href='profile.php?faculty=$data[2]'><img src=images/faculty/$data[2].jpg /><span>$data[0]</span></a></li>";
						}
						echo"</ul>";
					echo "</div>";
					}
					echo "<div class='clear searchClear'></div>";
					if($newsCount!=0){
						echo "<div class='searchResult'>";
						echo "<strong>".$factCount ." News found with keyword \"$keyword\" </strong>";
						echo "<ul class='noticeList newsSearchList'>";
						foreach($news as $data){
							displaySearchData($data,false);
						}
						echo"</ul>";
						echo "</div>";
					}
					if($eventCount!=0){
						echo "<div class='searchResult'>";
						echo "<strong>".$eventCount ." event found with keyword \"$keyword\" </strong>";
						echo "<ul class='noticeList newsSearchList'>";
						foreach($event as $data){
							displaySearchData($data,false);
						}
						echo"</ul>";
						echo "</div>";
					}
					if($noticeCount!=0){
						echo "<div class='searchResult'>";
						echo "<strong>".$noticeCount ." Notice found with keyword \"$keyword\" </strong>";
						echo "<ul class='noticeList newsSearchList'>";
						foreach($notice as $data){
							displaySearchData($data,false);
						}
						echo"</ul>";
						echo "</div>";
					}
					if($scrollCount!=0){
						echo "<div class='searchResult'>";
						echo "<strong>".$scrollCount ." Scroll news found with keyword \"$keyword\" </strong>";
						echo "<ul class='noticeList newsSearchList'>";
						foreach($scrollnews as $data){
							displaySearchData($data,false);
						}
						echo"</ul>";
						echo "</div>";
					}
					if($stdactCount!=0){
						echo "<div class='searchResult'>";
						echo "<strong>".$stdactCount ." Student activites found with keyword \"$keyword\" </strong>";
						echo "<ul class='noticeList newsSearchList'>";
						foreach($stdact as $data){
							displaySearchData($data,false);
						}
						echo"</ul>";
						echo "</div>";
					}
					if($tenderCount!=0){
						echo "<div class='searchResult'>";
						echo "<strong>".$tenderCount ." Tenders found with keyword \"$keyword\" </strong>";
						echo "<ul class='noticeList newsSearchList'>";
						foreach($tender as $data){
							displaySearchData($data,false);
						}
						echo"</ul>";
						echo "</div>";
					}
					if($pageCount!=0){
						echo "<div class='searchResult'>";
						echo "<strong>".$pageCount ." pages found with keyword \"$keyword\" in the title of the page </strong>";
						echo "<ul class='noticeList newsSearchList'>";
						foreach($page as $data){
							displaySearchData($data,true);
						}
						echo"</ul>";
						echo "</div>";
					}
					if($walkinCount!=0){
						echo "<div class='searchResult'>";
						echo "<strong>".$walkinCount ." Walkin Interviews with keyword \"$keyword\" </strong>";
						echo "<ul class='noticeList newsSearchList'>";
						foreach($walkin as $data){
							displaySearchData($data,false);
						}
						echo"</ul>";
						echo "</div>";
					}
				}
				else{
					echo "Sorry No result found!!!!";
				}
				
			}
		?>
	</div>
</div>
<?php
	include("template/footer.php");
?>
