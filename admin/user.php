<?php
	$_GET['page']=0;
	include("../template/adminheader.php");
?>
	<div class="belowContainer">
		<div class="centerBox">
			<div class="sideBar">
				<ul class="sideNav">
					<li><a href="#">Welcome!</a></li>	
					<li><a href="#"><?php echo $user ?></a></li>
					<li><a href="logout.php">Logout</a></li>	
				</ul>
			</div> <!-- sidenav ends -->
			<div class = "mainContent">
			<h1>Users</h1>
			<a href="user.php?action=add">Add new user</a><br/><br>
			<?php
				$action = $_GET['action'];
				$username = "";
				$password = "";
				if($action =="delete"){
					$id = $_GET['id'];
					if(deleteUser($id)){
					echo"<h1 class='success'>User successfully deleted</h1>";
						echo"<a href='user.php?action=view'>show all user</a>";
						die();
					}
					else{
					echo"<h1 class='error'>Error in deleting user</h1>";
					}
				}
				else if($action == "view"){
					$result = getAllUsers();
					die();
					
				}
				else if($action =="edit"){
					$id = $_GET['id'];
					$result = getUserDetail($id);
					while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
						$id = $row[0];
						$username = $row[1];
						$addedby = $row[3];
					}
					$password = "     ";
				}
				
				else if($action=="adduser"){
					$username = $_POST['user'];
					$pass = $_POST['password'];
					if(createUser($username,$pass,$user)){
						echo"<h1 class='success'>User successfully created</h1>";
						echo"<a href='user.php?action=view'>show all user</a>";
						die();
					}
					else{
						echo"<h1 class='error'>Error in creating user</h1>";
					}
					
				}
				else if($action=="edituser"){
					$username = $_POST['user'];
					$pass = $_POST['password'];
					$id = $_POST['id'];
					if(editUser($id,$username,$pass,$user)){
						echo"<h1 class='success'>User successfully edited</h1>";
						echo"<a href='user.php?action=view'>show all user</a>";
						die();
					}
					else{
						echo"<h1 class='error'>Error editing user</h1>";
					}
					
				}

				?>
					<form action ="user.php?action=<?php if($action=="edit" ){echo "edituser";}else{echo "adduser";} ?>" method="post">
						Username:<input type="text" name="user" value="<?php echo $username; ?>" required><br>
						Password:<input type="password" name="password" value="<?php echo $password; ?>"required><br>
						<input type="hidden" name="id" value="<?php echo $id; ?>"/>
						<input value="Add" type="submit">
					</form>
			</div>
		</div>
	</div>
<?php
	include("../template/adminfooter.php");
?>
