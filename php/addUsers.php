<?php
require_once 'sqlconnect.php';

if ($_POST['tou'] == 'teacher'){
	$sqlt = 'INSERT INTO teacherlogins (username,pass,gradeNum,classNum) VALUES (?,?,?,?)';
	$sqls = 'UPDATE grade'.$_POST["gradenum"].'students SET teacherName = "'.$_POST["userN"].'" WHERE class = '.$_POST["classnum"];
	
	$stmt = $conn->prepare($sqlt)->execute([$_POST['userN'],hash('sha256',$_POST['passW']),$_POST['gradenum'],$_POST['classnum']]);
	echo $sqls;
	$stmnt = $conn->prepare($sqls)->execute();
	header("Location: manageUsers.php?add=");
} else {
	$sqli = 'INSERT INTO grade'.$_POST["gradenum"].'students (username,pass,class,teacherName) VALUES (?,?,?,?)';
	$sqls = 'SELECT `username` FROM teacherlogins WHERE gradeNum = '.$_POST['gradenum'].'&& classNum = '.$_POST['classnum'];
	
	$stmt = $conn->query($sqls)->fetchAll(PDO::FETCH_COLUMN);
	
	$stmti = $conn->prepare($sqli)->execute([$_POST['userN'],hash('sha256',$_POST['passW']),$_POST['classnum'],$stmt[0]]);
	header("Location: manageUsers.php");
}
?>