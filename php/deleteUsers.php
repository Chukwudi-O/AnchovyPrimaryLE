<?php
require_once 'sqlconnect.php';
$gr = $_POST['gr'];
$un = $_POST['un'];
if($gr == 'teacherlogins'){
    $sql = 'DELETE FROM `teacherlogins` WHERE `username`="'.$un.'"';
    $stmt = $conn->prepare($sql)->execute();
}else{
    $sql = 'DELETE FROM '.$gr.' WHERE `username`="'.$un.'"';
    $stmt = $conn->prepare($sql)->execute();
}
header("Location: manageUsers.php?delete=");
?>