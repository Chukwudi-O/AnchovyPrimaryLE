<?php
require_once 'sqlconnect.php';

$user = $_POST["tuser"];
$pass = $_POST["tpass"];

$sqluser = 'SELECT `username` FROM `teacherlogins`';
$sqlpass = 'SELECT `pass` FROM `teacherlogins`';

$stmntuser = $conn->query($sqluser)->fetchAll(PDO::FETCH_COLUMN);
$stmntpass = $conn->query($sqlpass)->fetchAll(PDO::FETCH_COLUMN);

$valid = false;
for($i=0;$i<count($stmntuser);$i++){
	if ($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i]){
        $valid = true;
	}
}

if (!$valid){
	header("Location: ../html/teacherLogin.html");
}
?>