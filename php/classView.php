<?php
require_once 'sqlconnect.php'
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
        <h2>Class View</h2>
        <div>
            <div class="sub">
                <h3>Mathematics</h3>
                <h4>Course Materials:</h4>
                <?php
                $sqlfMm = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="math" && `type`="material"';
                $stmtfMm = $conn->query($sqlfMm)->fetchAll(PDO::FETCH_COLUMN);
                $sqleMm = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="math" && `type`="material"';
                $stmteMm = $conn->query($sqleMm)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtfMm);$i++){
                    $toEchoMm = '../teacherUploads/'.$stmtfMm[$i].'.'.$stmteMm[$i];
                    $repMm = str_replace(' ','',$toEchoMm);
                    echo '<a href="'.$repMm.'" download>'.$stmtfMm[$i].'</a>';
                }
                ?>

                <h4>Assignments:</h4>
                <?php
                $sqlMa = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="math" && `type`="assignment"';
                $stmtfMa = $conn->query($sqlMa)->fetchAll(PDO::FETCH_COLUMN);
                $sqleMa = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="math" && `type`="assignment"';
                $stmteMa = $conn->query($sqleMa)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtfMa);$i++){
                    $toEchoMa = '../teacherUploads/'.$stmtfMa[$i].'.'.$stmteMa[$i];
                    $repMa = str_replace(' ','',$toEchoMa);
                    echo '<a href="'.$repMa.'" download>'.$stmtfMa[$i].'</a>';
                }
                ?>
            </div>
            <div class="sub">
                <h3>English</h3>
                <h4>Course Materials:</h4>
                <?php
                $sqlEm = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="engish" && `type`="material"';
                $stmtfEm = $conn->query($sqlEm)->fetchAll(PDO::FETCH_COLUMN);
                $sqleEm = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="engish" && `type`="material"';
                $stmteEm = $conn->query($sqleEm)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtfEm);$i++){
                    $toEchoEm = '../teacherUploads/'.$stmtfEm[$i].'.'.$stmteEm[$i];
                    $repEm = str_replace(' ','',$toEchoEm);
                    echo '<a href="'.$repEm.'" download>'.$stmtfEm[$i].'</a>';
                }
                ?>

                <h4>Assignments:</h4>
                <?php
                $sql = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="engish" && `type`="assignment"';
                $stmtf = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="engish" && `type`="assignment"';
                $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtf);$i++){
                    $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                    $rep = str_replace(' ','',$toEcho);
                    echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a>';
                }
                ?>
            </div>
            <div class="sub">
                <h3>Science</h3>
                <h4>Course Materials:</h4>
                <?php
                $sql = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="science" && `type`="material"';
                $stmtf = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="science" && `type`="material"';
                $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtf);$i++){
                    $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                    $rep = str_replace(' ','',$toEcho);
                    echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a>';
                }
                ?>

                <h4>Assignments:</h4>
                <?php
                $sql = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="science" && `type`="assignment"';
                $stmtf = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="science" && `type`="assignment"';
                $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtf);$i++){
                    $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                    $rep = str_replace(' ','',$toEcho);
                    echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a>';
                }
                ?>
            </div>
            <div class="sub">
                <h3>Social Studies</h3>
                <h4>Course Materials:</h4>
                <?php
                $sql = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="social" && `type`="material"';
                $stmtf = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="social" && `type`="material"';
                $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtf);$i++){
                    $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                    $rep = str_replace(' ','',$toEcho);
                    echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a>';
                }
                ?>

                <h4>Assignments:</h4>
                <?php
                $sql = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="social" && `type`="assignment"';
                $stmtf = $conn->query($sql)->fetchAll(PDO::FETCH_COLUMN);
                $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="social" && `type`="assignment"';
                $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);

                for($i=0;$i<count($stmtf);$i++){
                    $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                    $rep = str_replace(' ','',$toEcho);
                    echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a>';
                }
                ?>
            </div>
        </div>
        <a href="javascript:history.go(-1)">Click here to go back.</a>
    </div>
</body>
</html>