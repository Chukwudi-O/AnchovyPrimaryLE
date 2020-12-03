<?php require_once 'studentLogin.php';?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/studentHome.css">
	<title>Grade <?php echo $valid.' Class '.$class;?></title>
</head>
<body>
	<div class="align">
	<div class="header">
		<h1>Anchovy Primary School</h1>
		<h2>Grade <?php echo $valid.' Class '.$class;?></h2>
    </div>
    <form action="subject.php" method="post">
	<div class="subject.php">
		<button type="submit" name="math">Mathematics</button><br>
        <button type="submit" name="english">English</button><br>
        <button type="submit" name="science">Science</button><br>
        <button type="submit" name="social">Social Studies</button>
        <?php 
		echo '<input type="hidden" name="userH" value="'.$user.'">';
        echo '<input type="hidden" name="passH" value="'.hash('sha256',$pass).'">';
        echo '<input type="hidden" name="gradeH" value="'.$valid.'">';
		echo '<input type="hidden" name="classH" value="'.$class.'">';
        ?>
        <a href="javascript:history.go(-1)">Click here to go back.</a>
    </div>
    </form>
    
</div>
</body>
</html>