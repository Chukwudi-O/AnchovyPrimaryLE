<?php require_once 'teacherLogin.php';?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/teacherhome.css">
	<title>APSLE - Teacher Home</title>
</head>
<body>
	<div class="bg">
	<div class="title">
	<h1>Anchovy Primary School</h1>
	<h2>Teacher's Portal</h2>
	</div>
<div class="buttongrp">
<form action="viewClass.php" method="post">
    <button class="btns" type="submit">View My Class</button>
    <?php echo '<input type="hidden" name="userH" value="'.$user.'">';
    echo '<input type="hidden" name="passH" value="'.$pass.'">';?>
</form>
<form action="../html/manageTests.html"><button class="btns" type="submit">Manage Test</button></form>
<form action="../html/manageCourseMaterial.html"><button class="btns" type="submit">Manage Course Material</button></form>
<form><button class="btns" type="button">View My Class Attendance</button></form>
<a href="javascript:window.location.href = '../html/teacherLogin.html'">Click here to log out.</a>
</div>
</div>

</body>
</html>