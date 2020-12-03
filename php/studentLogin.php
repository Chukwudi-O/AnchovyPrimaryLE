<?php
require_once 'sqlconnect.php';

$user = $_POST["user"];
$pass = $_POST["pass"];

$valid = 0;
for($a=1;$a<7;$a++){
	$sqluser = 'SELECT username FROM grade'.$a.'students';
	$sqlpass = 'SELECT pass FROM grade'.$a.'students';
	$sqlclass = 'SELECT class FROM grade'.$a.'students';
	$stmntuser = $conn->query($sqluser)->fetchAll(PDO::FETCH_COLUMN);
	$stmntpass = $conn->query($sqlpass)->fetchAll(PDO::FETCH_COLUMN);
	$stmntclass = $conn->query($sqlclass)->fetchAll(PDO::FETCH_COLUMN);
	
	for($i=0;$i<count($stmntuser);$i++){
		if ($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 1){
			$valid = 1;
			$sqlclass = 'SELECT class FROM grade'.$a.'students WHERE `username`="'.$stmntuser[$i].'"';
			$stmntclass = $conn->query($sqlclass)->fetchAll(PDO::FETCH_COLUMN);
			$class = $stmntclass[0];
		} else if($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 2){
			$valid = 2;
			$sqlclass = 'SELECT class FROM grade'.$a.'students WHERE `username`="'.$stmntuser[$i].'"';
			$stmntclass = $conn->query($sqlclass)->fetchAll(PDO::FETCH_COLUMN);
			$class = $stmntclass[0];
		}else if($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 3){
			$valid = 3;
			$sqlclass = 'SELECT class FROM grade'.$a.'students WHERE `username`="'.$stmntuser[$i].'"';
			$stmntclass = $conn->query($sqlclass)->fetchAll(PDO::FETCH_COLUMN);
			$class = $stmntclass[0];
		}else if($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 4){
			$valid = 4;
			$sqlclass = 'SELECT class FROM grade'.$a.'students WHERE `username`="'.$stmntuser[$i].'"';
			$stmntclass = $conn->query($sqlclass)->fetchAll(PDO::FETCH_COLUMN);
			$class = $stmntclass[0];
		}else if($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 5){
			$valid = 5;
			$sqlclass = 'SELECT class FROM grade'.$a.'students WHERE `username`="'.$stmntuser[$i].'"';
			$stmntclass = $conn->query($sqlclass)->fetchAll(PDO::FETCH_COLUMN);
			$class = $stmntclass[0];
		}else if($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 6){
			$valid = 6;
			$sqlclass = 'SELECT class FROM grade'.$a.'students WHERE `username`="'.$stmntuser[$i].'"';
			$stmntclass = $conn->query($sqlclass)->fetchAll(PDO::FETCH_COLUMN);
			$class = $stmntclass[0];
		}
	}
}

if ($valid == 0){
	header("Location: ../html/studentLogin.html");
}
?>