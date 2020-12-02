<?php
require_once 'sqlconnect.php';

$user = $_POST["user"];
$pass = $_POST["pass"];

$sqluser = 'SELECT username FROM adminlogins';
$sqlpass = 'SELECT pass FROM adminlogins';

$stmntuser = $conn->query($sqluser)->fetchAll(PDO::FETCH_COLUMN);
$stmntpass = $conn->query($sqlpass)->fetchAll(PDO::FETCH_COLUMN);

$valid = false;
for($i=0;$i<count($stmntuser);$i++){
	if ($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i]){
		$valid = true;
	}
}

if (!$valid){
	header("Location: ../html/adminLogin.html");
}else{
	header("Location: ../html/adminHome.html");
}
?>
