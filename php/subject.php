<?php require_once 'sqlconnect.php';
$user = $_POST['userH'];
$pass = $_POST['passH'];
$grade = $_POST['gradeH'];
$class = $_POST['classH'];

if(isset($_POST['math'])){
    $sub = "Mathematics";
    $up = "math";
}elseif(isset($_POST['english'])){
    $sub = "English";
    $up = "engish";
}elseif(isset($_POST['science'])){
    $sub = "Science";
    $up = "science";
}elseif(isset($_POST['social'])){
    $sub = "Social Studies";
    $up = "social";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>A.P.S - Grade <?php echo $grade.' Class '.$class;?></title>
    <link rel="stylesheet" type="text/css" href="../styles/subject.css">
</head>
<body>
    <div class="mainDiv">
        <h1>Anchovy Primary School</h1>
        <h2>Grade <?php echo $grade.' Class '.$class;?></h2>
        <div class="subjects">
            <h3><?php echo $sub;?></h3><br>
            <h4>Course Materials:</h4>
            <?php
            $sqlf = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="'.$up.'" && `type`="material" && `classNum`='.$class.' && `gradeNum`='.$grade;
            $stmtf = $conn->query($sqlf)->fetchAll(PDO::FETCH_COLUMN);
            $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="'.$up.'" && `type`="material" && `classNum`='.$class.' && `gradeNum`='.$grade;
            $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);
            for($i=0;$i<count($stmtf);$i++){
                $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                $rep = str_replace(' ','',$toEcho);
                echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a>';
            }
            ?>
        </div>
        <div class="subjects">
            <h4>Assignments:</h4>
            <?php
            $sqlf = 'SELECT `fileN` FROM `teacheruploads` WHERE `subject`="'.$up.'" && `type`="assignment" && `classNum`='.$class.' && `gradeNum`='.$grade;
            $stmtf = $conn->query($sqlf)->fetchAll(PDO::FETCH_COLUMN);
            $sqle = 'SELECT `extension` FROM `teacheruploads` WHERE `subject`="'.$up.'" && `type`="assignment" && `classNum`='.$class.' && `gradeNum`='.$grade;
            $stmte = $conn->query($sqle)->fetchAll(PDO::FETCH_COLUMN);
            $count=0;
            for($i=0;$i<count($stmtf);$i++){
                $count++;
                $toEcho = '../teacherUploads/'.$stmtf[$i].'.'.$stmte[$i];
                $rep = str_replace(' ','',$toEcho);
                echo '<a href="'.$rep.'" download>'.$stmtf[$i].'</a><br><br>';
                echo '<form action="studentUpload.php" method="post">
                    <input type="File" name="up" id="assign" accept="image/*,.pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    <button type="submit" name="sub'.$i.'">Submit</button>
                </form>';
            }
            ?>
        </div>
        <a href="javascript:history.go(-1)">Click here to go back.</a>
    </div>
</body>
</html>