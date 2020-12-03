<?php require_once 'sqlconnect.php';

$grade = $_POST['gr'];
$class = $_POST['cl'];
$fn = $_POST['fn'];
$ext = $_POST['ext'];

$sql = 'DELETE FROM `teacheruploads` WHERE `gradeNum`='.$grade.' && `classNum`='.$class.' && `fileN`="'.$fn.'" && `extension`="'.$ext.'"';
$stmt = $conn->prepare($sql)->execute();
unlink('../teacherUploads/'.$fn.'.'.$ext);
echo '<script type="text/javascript">history.go(-1);</script>';
?>