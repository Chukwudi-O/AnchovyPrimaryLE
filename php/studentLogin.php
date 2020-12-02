<?php
require_once 'sqlconnect.php';

$user = $_POST["user"];
$pass = $_POST["pass"];

$valid = 0;
for($a=1;$a<7;$a++){
	$sqluser = 'SELECT username FROM grade'.$a.'students';
	$sqlpass = 'SELECT pass FROM grade'.$a.'students';
	$stmntuser = $conn->query($sqluser)->fetchAll(PDO::FETCH_COLUMN);
	$stmntpass = $conn->query($sqlpass)->fetchAll(PDO::FETCH_COLUMN);
	
	for($i=0;$i<count($stmntuser);$i++){
		if ($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 1){
			$valid = 1;
		} else if($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 2){
			$valid = 2;
		}else if($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 3){
			$valid = 3;
		}else if($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 4){
			$valid = 4;
		}else if($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 5){
			$valid = 5;
		}else if($stmntuser[$i] == $user && hash('sha256' ,$pass) == $stmntpass[$i] && $a == 6){
			$valid = 6;
		}
	}
}

switch ($valid){
	case 0:
		header("Location: ../html/studentLogin.html");
		break;
	case 1:
		header("Location: ../html/grade1Students.html");
		break;
	case 2:
		header("Location: ../html/grade2Students.html");
		break;
	case 3:
		header("Location: ../html/grade3Students.html");
		break;
	case 4:
		header("Location: ../html/grade4Students.html");
		break;
	case 5:
		header("Location: ../html/grade5Students.html");
		break;
	case 6:
		header("Location: ../html/grade6Students.html");
		break;
}
?>