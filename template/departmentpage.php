<div class = "mainContent deptContent">
		Page Title: <input type="text" name="title" value="<?php echo $data[1];?>" required ><br/>
		Page Description:<textarea name="pageDesc"><?php echo$data[2];?></textarea><br/>
		<textarea class="ckeditor" id="editor1" name="editor1" rows="10"><?php echo$data[3];?></textarea><br/>
		<input type="submit" value="submit"/>
</div>

<div class='sideBar'>
	<ul class='sideNav'>
		<?php editPageTitle($data[4],$mode); ?>
	</ul>
</div> <!-- sidenav ends -->
