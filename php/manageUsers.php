<?php
require_once 'sqlconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>APSLE - Manage Users</title>
	<link rel="stylesheet" type="text/css" href="../styles/manageUsers.css">
	
</head>
<body>
	<h1>ANCHOVY PRIMARY SCHOOL LEARNING ENVIRONMENT</h1>

	<div class="mainDiv">
		<h2>User Management</h2>
		<form method="get">
			<div>
				<button name="add">ADD USER</button><br>
			</div>
			<div>
				<button name="search">SEARCH USER</button>
			</div>
		</form>
	
	<?php 
		if (isset($_GET['add'])){
			echo '<div class="addUser"><h3>Add new user information below</h3>
			<form method="post" onsubmit="return validate()" action="addUsers.php">
				<div class="auc">
					<label for="user">Username</label>
					<input type="text" name="userN" id="user"><br>
				</div>
				<div class="auc">
					<label for="pass">Password</label>
					<input type="password" name="passW" id="pass"><br>
				</div>
					<p>Type of User:</p>
				<div class="auc">
					<label for="teach">Teacher</label>
					<input type="radio" name="tou" id="teach" value="teacher">
					<label for="stud">Student</label>
					<input type="radio" name="tou" id="stud" value="student"><br>
				</div>
				<div class="auc">
					<label for="gn">Grade Number</label>
					<input type="number" name="gradenum" id="gn"><br>
				</div>
				<div class="auc">
					<label for="cn">Class Number</label>
					<input type="number" name="classnum" id="cn"><br>
				</div>
				<div class="auc">
					<input type="submit" value="Add User" id="adduser" name="addusr">
				</div>
			</form>
			<div class="auc">
				<input type="button" value="Cancel" onclick="reload()">
			</div>';			
		} else if (isset($_GET['search'])){
			echo '<div class="searchUser"><h3>Search and Edit User</h3>
				<label for="sbn">Search by name</label><input type="radio" name="sb" id="sbn">
				<label for="sbg">Search by grade</label><input type="radio" name="sb" id="sbg"><br>
				<input type="text"><br>
				
			</div>';
		}
		
	?>
</div>
<script type="text/javascript">
		function validate(){
			if (user.value == "" || pass.value == ""){
				console.log("empty username or password");
				return false;
			}else if (!teach.checked && !stud.checked){
				console.log("did not select ype of user.");
				return false;
			} else if (gn.value == 0 || gn.value > 6){
				console.log("grade number too large or not set.");
				return false;
			} else if (cn.value == 0 || cn.value > 4){
				console.log("class number too large or not set");
				return false;
			}
			return true;
		}
		function reload(){
			window.location.replace("manageUsers.php");
		}
</script>	
</body>
</html>