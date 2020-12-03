<?php

require_once 'sqlconnect.php';
$user = $_POST['uservmc'];
$pass = $_POST['passvmc'];

$sqlg = 'SELECT `gradeNum` FROM `teacherlogins` WHERE `username`="'.$user.'" && `pass`="'.$pass.'"';
$grade = $conn->query($sqlg)->fetch();
$sqlc = 'SELECT `classNum` FROM `teacherlogins` WHERE `username`="'.$user.'" && `pass`="'.$pass.'"';
$class = $conn->query($sqlc)->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/classView.css">
	<title>APSLE - Class View</title>
</head>
<body>
    <h1>ANCHOVY PRIMARY SCHOOL LEARNING ENVIRONMENT</h1>
    
	<div class="mainDiv">
        <h1>Grade <?php echo($grade[0]);?> Class <?php echo($class[0]);?></h1>
        <h2>Class View</h2>
        <div>
            <div class="sub">
                <h3>Mathematics</h3>
                <h4>Course Materials:</h4>
                <?php
                $sqlfMm = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="math" && `type`="material" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmtfMm = $conn->query($sqlfMm)->fetchAll(PDO::FETCH_COLUMN);
                $sqleMm = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="math" && `type`="material" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmteMm = $conn->query($sqleMm)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtfMm);$i++){
                    $toEchoMm = '../teacherUploads/'.$stmtfMm[$i].'.'.$stmteMm[$i];
                    $repMm = str_replace(' ','',$toEchoMm);
                    echo '<a href="'.$repMm.'" download>'.$stmtfMm[$i].'</a><br><br>
                    <form action="deleteUpload.php" method="post">
                        <button type="submit" name="del'.$i.'">Delete</button>
                        <input type="hidden" name="fn" value="'.$stmtfMm[0].'">
                        <input type="hidden" name="ext" value="'.$stmteMm[0].'">
                        <input type="hidden" name="gr" value="'.$grade[0].'">
                        <input type="hidden" name="cl" value="'.$class[0].'">
                    </form>';
                }
                ?>

                <h4>Assignments:</h4>
                <?php
                $sqlMa = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="math" && `type`="assignment" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmtfMa = $conn->query($sqlMa)->fetchAll(PDO::FETCH_COLUMN);
                $sqleMa = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="math" && `type`="assignment" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmteMa = $conn->query($sqleMa)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtfMa);$i++){
                    $toEchoMa = '../teacherUploads/'.$stmtfMa[$i].'.'.$stmteMa[$i];
                    $repMa = str_replace(' ','',$toEchoMa);
                    echo '<a href="'.$repMa.'" download>'.$stmtfMa[$i].'</a><br><br>
                    <form action="deleteUpload.php" method="post">
                        <button type="submit" name="del'.$i.'">Delete</button>
                        <input type="hidden" name="fn" value="'.$stmtfMa[0].'">
                        <input type="hidden" name="ext" value="'.$stmteMa[0].'">
                        <input type="hidden" name="gr" value="'.$grade[0].'">
                        <input type="hidden" name="cl" value="'.$class[0].'">
                    </form>';
                }
                ?>
            </div>
            <div class="sub">
                <h3>English</h3>
                <h4>Course Materials:</h4>
                <?php
                $sqlEm = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="engish" && `type`="material" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmtfEm = $conn->query($sqlEm)->fetchAll(PDO::FETCH_COLUMN);
                $sqleEm = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="engish" && `type`="material" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmteEm = $conn->query($sqleEm)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtfEm);$i++){
                    $toEchoEm = '../teacherUploads/'.$stmtfEm[$i].'.'.$stmteEm[$i];
                    $repEm = str_replace(' ','',$toEchoEm);
                    echo '<a href="'.$repEm.'" download>'.$stmtfEm[$i].'</a><br><br>
                    <form action="deleteUpload.php" method="post">
                        <button type="submit" name="del'.$i.'">Delete</button>
                        <input type="hidden" name="fn" value="'.$stmtfEm[0].'">
                        <input type="hidden" name="ext" value="'.$stmteEm[0].'">
                        <input type="hidden" name="gr" value="'.$grade[0].'">
                        <input type="hidden" name="cl" value="'.$class[0].'">
                    </form>';
                }
                ?>

                <h4>Assignments:</h4>
                <?php
                $sql = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="engish" && `type`="assignment" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmtf = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="engish" && `type`="assignment" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtf);$i++){
                    $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                    $rep = str_replace(' ','',$toEcho);
                    echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a><br><br>
                    <form action="deleteUpload.php" method="post">
                        <button type="submit" name="del'.$i.'">Delete</button>
                        <input type="hidden" name="fn" value="'.$stmtf[0].'">
                        <input type="hidden" name="ext" value="'.$stmte[0].'">
                        <input type="hidden" name="gr" value="'.$grade[0].'">
                        <input type="hidden" name="cl" value="'.$class[0].'">
                    </form>';
                }
                ?>
            </div>
            <div class="sub">
                <h3>Science</h3>
                <h4>Course Materials:</h4>
                <?php
                $sql = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="science" && `type`="material" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmtf = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="science" && `type`="material" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtf);$i++){
                    $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                    $rep = str_replace(' ','',$toEcho);
                    echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a><br><br>
                    <form action="deleteUpload.php" method="post">
                        <button type="submit" name="del'.$i.'">Delete</button>
                        <input type="hidden" name="fn" value="'.$stmtf[0].'">
                        <input type="hidden" name="ext" value="'.$stmte[0].'">
                        <input type="hidden" name="gr" value="'.$grade[0].'">
                        <input type="hidden" name="cl" value="'.$class[0].'">
                    </form>';
                }
                ?>

                <h4>Assignments:</h4>
                <?php
                $sql = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="science" && `type`="assignment" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmtf = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="science" && `type`="assignment" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtf);$i++){
                    $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                    $rep = str_replace(' ','',$toEcho);
                    echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a><br><br>
                    <form action="deleteUpload.php" method="post">
                        <button type="submit" name="del'.$i.'">Delete</button>
                        <input type="hidden" name="fn" value="'.$stmtf[0].'">
                        <input type="hidden" name="ext" value="'.$stmte[0].'">
                        <input type="hidden" name="gr" value="'.$grade[0].'">
                        <input type="hidden" name="cl" value="'.$class[0].'">
                    </form>';
                }
                ?>
            </div>
            <div class="sub">
                <h3>Social Studies</h3>
                <h4>Course Materials:</h4>
                <?php
                $sql = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="social" && `type`="material" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmtf = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="social" && `type`="material" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtf);$i++){
                    $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                    $rep = str_replace(' ','',$toEcho);
                    echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a><br><br>
                    <form action="deleteUpload.php" method="post">
                        <button type="submit" name="del'.$i.'">Delete</button>
                        <input type="hidden" name="fn" value="'.$stmtf[0].'">
                        <input type="hidden" name="ext" value="'.$stmte[0].'">
                        <input type="hidden" name="gr" value="'.$grade[0].'">
                        <input type="hidden" name="cl" value="'.$class[0].'">
                    </form>';
                }
                ?>

                <h4>Assignments:</h4>
                <?php
                $sql = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="social" && `type`="assignment" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmtf = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="social" && `type`="assignment" && `gradeNum`='.$grade[0].' && `classNum`='.$class[0];
                $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtf);$i++){
                    $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                    $rep = str_replace(' ','',$toEcho);
                    echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a><br><br>
                    <form action="deleteUpload.php" method="post">
                        <button type="submit" name="del'.$i.'">Delete</button>
                        <input type="hidden" name="fn" value="'.$stmtf[0].'">
                        <input type="hidden" name="ext" value="'.$stmte[0].'">
                        <input type="hidden" name="gr" value="'.$grade[0].'">
                        <input type="hidden" name="cl" value="'.$class[0].'">
                    </form>';
                }
                ?>
            </div>
        </div>
        <a href="javascript:history.go(-1)">Click here to go back.</a>
    </div>
</body>
</html>