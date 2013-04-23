<div class='sideBar'>
	<ul class='sideNav'>
		<li><a href="#">Welcome!</a></li>	
		<li><a href="#">Administrator</a></li>
		<?php editPageTitle($data[4],$mode); ?>
	</ul>
</div> <!-- sidenav ends -->
<div class = 'mainContent'>
	Page Title: <input type="text" name="title" value="<?php echo $data[1];?>"><br/>
	Page Description:<textarea name="pageDesc"><?php echo$data[2];?></textarea><br/>

	<textarea class="ckeditor" id="editor1" name="editor1" rows="10"><?php echo$data[3];?></textarea><br/>
	
	<input type="submit" value="submit"/>

</div>
