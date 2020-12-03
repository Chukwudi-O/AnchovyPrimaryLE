<?php
require_once 'sqlconnect.php';
$sqlnT = 'SELECT `username` FROM `teacherlogins`';
$sqlng1 = 'SELECT `username` FROM `grade1students`';
$sqlng2 = 'SELECT `username` FROM `grade2students`';
$sqlng3 = 'SELECT `username` FROM `grade3students`';
$sqlng4 = 'SELECT `username` FROM `grade4students`';
$sqlng5 = 'SELECT `username` FROM `grade5students`';
$sqlng6 = 'SELECT `username` FROM `grade6students`';

$stmtT = $conn->query($sqlnT)->fetchAll(PDO::FETCH_COLUMN);
$stmtg1 = $conn->query($sqlng1)->fetchAll(PDO::FETCH_COLUMN);
$stmtg2 = $conn->query($sqlng2)->fetchAll(PDO::FETCH_COLUMN);
$stmtg3 = $conn->query($sqlng3)->fetchAll(PDO::FETCH_COLUMN);
$stmtg4 = $conn->query($sqlng4)->fetchAll(PDO::FETCH_COLUMN);
$stmtg5 = $conn->query($sqlng5)->fetchAll(PDO::FETCH_COLUMN);
$stmtg6 = $conn->query($sqlng6)->fetchAll(PDO::FETCH_COLUMN);
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
				<button name="delete">DELETE USER</button>
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
		} else if (isset($_GET['delete'])){
			echo '<div class="DeleteUser"><h3>Delete User</h3>
			
			<table>
				<tr><th>Username</th><th>Type of User</th><th>Delete Button</th></tr>';

				for($i=0;$i<count($stmtT);$i++){
					echo '<tr><td>'.$stmtT[$i].'</td><td>Teacher</td><td>
					<form action="deleteUsers.php" method="post">
						<button type="submit">DELETE</button>
						<input type="hidden" value="'.$stmtT[$i].'" name="un">
						<input type="hidden" value="teacherlogins" name="gr">
					</form></td>';
				}
				for($i=0;$i<count($stmtg1);$i++){
					echo '<tr><td>'.$stmtg1[$i].'</td><td>Student</td><td>
					<form action="deleteUsers.php" method="post">
						<button type="submit">DELETE</button>
						<input type="hidden" value="'.$stmtg1[$i].'" name="un">
						<input type="hidden" value="grade1students" name="gr">
					</form></td>';
				}
				for($i=0;$i<count($stmtg2);$i++){
					echo '<tr><td>'.$stmtg2[$i].'</td><td>Student</td><td>
					<form action="deleteUsers.php" method="post">
						<button type="submit">DELETE</button>
						<input type="hidden" value="'.$stmtg2[$i].'" name="un">
						<input type="hidden" value="grade2students" name="gr">
					</form></td>';
				}
				for($i=0;$i<count($stmtg3);$i++){
					echo '<tr><td>'.$stmtg3[$i].'</td><td>Student</td><td>
					<form action="deleteUsers.php" method="post">
						<button type="submit">DELETE</button>
						<input type="hidden" value="'.$stmtg3[$i].'" name="un">
						<input type="hidden" value="grade3students" name="gr">
					</form></td>';
				}
				for($i=0;$i<count($stmtg4);$i++){
					echo '<tr><td>'.$stmtg4[$i].'</td><td>Student</td><td>
					<form action="deleteUsers.php" method="post">
						<button type="submit">DELETE</button>
						<input type="hidden" value="'.$stmtg4[$i].'" name="un">
						<input type="hidden" value="grade4students" name="gr">
					</form></td>';
				}
				for($i=0;$i<count($stmtg5);$i++){
					echo '<tr><td>'.$stmtg5[$i].'</td><td>Student</td><td>
					<form action="deleteUsers.php" method="post">
						<button type="submit">DELETE</button>
						<input type="hidden" value="'.$stmtg5[$i].'" name="un">
						<input type="hidden" value="grade5students" name="gr">
					</form></td>';
				}
				for($i=0;$i<count($stmtg6);$i++){
					echo '<tr><td>'.$stmtg6[$i].'</td><td>Student</td><td>
					<form action="deleteUsers.php" method="post">
						<button type="submit">DELETE</button>
						<input type="hidden" value="'.$stmtg6[$i].'" name="un">
						<input type="hidden" value="grade6students" name="gr">
					</form></td>';
				}
			echo '</table></div>';	
			
		}
		
	?>
	<a href="javascript:window.location.href = 'adminLogin.php';">Click here to go back.</a>
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