<?php
$user = $_POST['userHmcm'];
$pass = $_POST['passHmcm'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/manageCourseMaterials.css">
	<title>Manager Course Material</title>
</head>
<body>
	<div class="bg">
		<div class="title">
			<h1>A.P.S Teachers</h1>
			<h2>Manage Course Materials</h2>
		</div>
		<div class="buttongrp">
            <form action="../php/addCourseMaterial.php" method="post">
                <button class="btns" type="submit">Add Course Material</button>
                <?php 
				echo '<input type="hidden" name="useracm" value="'.$user.'">';
				echo '<input type="hidden" name="passacm" value="'.$pass.'">';
				?>
            </form>
            <form action="../php/classView.php" method="post">
                <button class="btns" type="submit">View My classroom </button>
                <?php 
				echo '<input type="hidden" name="uservmc" value="'.$user.'">';
				echo '<input type="hidden" name="passvmc" value="'.$pass.'">';
				?>
            </form>
			<a href="javascript:history.go(-1)">Click here to go back.</a>
		</div>
	</div>
</body>
</html>