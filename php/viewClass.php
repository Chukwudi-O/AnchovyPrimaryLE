<?php
require_once 'sqlconnect.php';
$sqlg = 'SELECT `gradeNum` FROM `teacherlogins` WHERE `username`="'.$_POST['userH'].'"';
$sqlc = 'SELECT `classNum` FROM `teacherlogins` WHERE `username`="'.$_POST['userH'].'"';

$stmtg = $conn->query($sqlg)->fetchAll(PDO::FETCH_COLUMN);
$stmtc = $conn->query($sqlc)->fetchAll(PDO::FETCH_COLUMN);

$sqln = 'SELECT `username` FROM grade'.$stmtg[0].'students WHERE `class`='.$stmtc[0];
$stmtn = $conn->query($sqln)->fetchAll(PDO::FETCH_COLUMN);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/viewClass.css">
	<title>APSLE - View Class</title>
</head>
<body>
    <h1>ANCHOVY PRIMARY SCHOOL LEARNING ENVIRONMENT</h1><br>
    <div class="mainDiv">
        <h2>Class View<h2><br>
        <?php echo '<h3>Grade '.$stmtg[0].'</h3><br><h3>Class '.$stmtc[0].'</h3>';?>
        <table>
            <tr>
                <th>Student Name<th>
            </tr>
            <?php
            for ($i=0;$i<count($stmtn);$i++){
                echo('<tr><td>'.$stmtn[$i].'</td></tr>');
            }
            ?>
        </table>
        <a href="javascript:history.go(-1)">Click here to go back.</a>
    </div>
</body>
</html>
<?php

?>