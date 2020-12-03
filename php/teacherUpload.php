<?php
require_once 'sqlconnect.php';

if(isset($_POST['mathsub'])){
    $cMat = $_FILES['mathmat'];
    $cAs = $_FILES['mathas'];
    
    $user = $_POST['userm'];
    $pass = $_POST['passm'];
    $sqlg = 'SELECT `gradeNum` FROM `teacherlogins` WHERE `username` = "'.$user.'" && `pass`="'.$pass.'"';
    $sqlc = 'SELECT `classNum` FROM `teacherlogins` WHERE `username` = "'.$user.'" && `pass`="'.$pass.'"';
    
    $stmtg = $conn->query($sqlg)->fetchAll(PDO::FETCH_COLUMN);
    $stmtc = $conn->query($sqlc)->fetchAll(PDO::FETCH_COLUMN);

    if (file_exists($cMat['tmp_name']) || is_uploaded_file($cMat['tmp_name'])){
        $cMatName = $cMat['name'];
        $cMatTmp = $cMat['tmp_name'];
        $cMatSize = $cMat['size'];
        $cMatExt = explode('.',$cMatName);
        
        $sqltu = 'INSERT INTO teacheruploads (`fileN`,`extension`,`subject`,`type`,`gradeNum`,`classNum`) VALUES (?,?,?,?,?,?)';
        $stmtu = $conn->prepare($sqltu)->execute([$cMatExt[0],$cMatExt[1],'math','material',$stmtg[0],$stmtc[0]]);
        
        move_uploaded_file($cMatTmp,'../teacherUploads/'.$cMatName);
    }
    if (file_exists($cAs['tmp_name']) || is_uploaded_file($cAs['tmp_name'])){
        $cAsName = $cAs['name'];
        $cAsTmp = $cAs['tmp_name'];
        $cAsSize = $cAs['size'];
        $cAsExt = explode('.',$cAsName);

        $sqltu = 'INSERT INTO teacheruploads (`fileN`,`extension`,`subject`,`type`,`gradeNum`,`classNum`) VALUES (?,?,?,?,?,?)';
        $stmtu = $conn->prepare($sqltu)->execute([$cAsExt[0],$cAsExt[1],'math','assignment',$stmtg[0],$sqlc[0]]);
        move_uploaded_file($cMatTmp,'../teacherUploads/'.$cAsName);
    }

}if(isset($_POST['engsub'])){
    $cMat = $_FILES['englishmat'];
    $cAs = $_FILES['englishas'];

    $user = $_POST['usere'];
    $pass = $_POST['passe'];
    $sqlg = 'SELECT `gradeNum` FROM `teacherlogins` WHERE `username` = "'.$user.'" && `pass`="'.$pass.'"';
    $sqlc = 'SELECT `classNum` FROM `teacherlogins` WHERE `username` = "'.$user.'" && `pass`="'.$pass.'"';
    
    $stmtg = $conn->query($sqlg)->fetchAll(PDO::FETCH_COLUMN);
    $stmtc = $conn->query($sqlc)->fetchAll(PDO::FETCH_COLUMN);

    if (file_exists($cMat['tmp_name']) || is_uploaded_file($cMat['tmp_name'])){
        $cMatName = $cMat['name'];
        $cMatTmp = $cMat['tmp_name'];
        $cMatSize = $cMat['size'];
        $cMatExt = explode('.',$cMatName);

        $sqltu = 'INSERT INTO teacheruploads (`fileN`,`extension`,`subject`,`type`,`gradeNum`,`classNum`) VALUES (?,?,?,?,?,?)';
        $stmtu = $conn->prepare($sqltu)->execute([$cMatExt[0],end($cMatExt),'engish','material'$stmtg[0],$stmtc[0]]);
        move_uploaded_file($cMatTmp,'../teacherUploads/'.$cMatName);
    }
    if (file_exists($cAs['tmp_name']) || is_uploaded_file($cAs['tmp_name'])){
        $cAsName = $cAs['name'];
        $cAsTmp = $cAs['tmp_name'];
        $cAsSize = $cAs['size'];
        $cAsExt = explode('.',$cAsName);

        $sqltu = 'INSERT INTO teacheruploads (`fileN`,`extension`,`subject`,`type`,`gradeNum`,`classNum`) VALUES (?,?,?,?,?,?)';
        $stmtu = $conn->prepare($sqltu)->execute([$cAsExt[0],end($cAsExt),'engish','assignment'$stmtg[0],$stmtc[0]]);
        move_uploaded_file($cMatTmp,'../teacherUploads/'.$cAsName);
    }
}if(isset($_POST['scisub'])){
    $cMat = $_FILES['sciencemat'];
    $cAs = $_FILES['scienceas'];

    $user = $_POST['userm'];
    $pass = $_POST['passm'];
    $sqlg = 'SELECT `gradeNum` FROM `teacherlogins` WHERE `username` = "'.$user.'" && `pass`="'.$pass.'"';
    $sqlc = 'SELECT `classNum` FROM `teacherlogins` WHERE `username` = "'.$user.'" && `pass`="'.$pass.'"';
    
    $stmtg = $conn->query($sqlg)->fetchAll(PDO::FETCH_COLUMN);
    $stmtc = $conn->query($sqlc)->fetchAll(PDO::FETCH_COLUMN);

    if (file_exists($cMat['tmp_name']) || is_uploaded_file($cMat['tmp_name'])){
        $cMatName = $cMat['name'];
        $cMatTmp = $cMat['tmp_name'];
        $cMatSize = $cMat['size'];
        $cMatExt = explode('.',$cMatName);

        $sqltu = 'INSERT INTO teacheruploads (`fileN`,`extension`,`subject`,`type`,`gradeNum`,`classNum`) VALUES (?,?,?,?,?,?)';
        $stmtu = $conn->prepare($sqltu)->execute([$cMatExt[0],end($cMatExt),'science','material'$stmtg[0],$stmtc[0]]);
        move_uploaded_file($cMatTmp,'../teacherUploads/'.$cMatName);
    }
    if (file_exists($cAs['tmp_name']) || is_uploaded_file($cAs['tmp_name'])){
        $cAsName = $cAs['name'];
        $cAsTmp = $cAs['tmp_name'];
        $cAsSize = $cAs['size'];
        $cAsExt = explode('.',$cAsName);

        $sqltu = 'INSERT INTO teacheruploads (`fileN`,`extension`,`subject`,`type`,`gradeNum`,`classNum`) VALUES (?,?,?,?,?,?)';
        $stmtu = $conn->prepare($sqltu)->execute([$cAsExt[0],end($cAsExt),'science','assignment'$stmtg[0],$stmtc[0]]);
        move_uploaded_file($cMatTmp,'../teacherUploads/'.$cAsName);
    }
}if(isset($_POST['socsub'])){
    $cMat = $_FILES['socialmat'];
    $cAs = $_FILES['socialas'];

    $user = $_POST['userm'];
    $pass = $_POST['passm'];
    $sqlg = 'SELECT `gradeNum` FROM `teacherlogins` WHERE `username` = "'.$user.'" && `pass`="'.$pass.'"';
    $sqlc = 'SELECT `classNum` FROM `teacherlogins` WHERE `username` = "'.$user.'" && `pass`="'.$pass.'"';
    
    $stmtg = $conn->query($sqlg)->fetchAll(PDO::FETCH_COLUMN);
    $stmtc = $conn->query($sqlc)->fetchAll(PDO::FETCH_COLUMN);

    if (file_exists($cMat['tmp_name']) || is_uploaded_file($cMat['tmp_name'])){
        $cMatName = $cMat['name'];
        $cMatTmp = $cMat['tmp_name'];
        $cMatSize = $cMat['size'];
        $cMatExt = explode('.',$cMatName);

        $sqltu = 'INSERT INTO teacheruploads (`fileN`,`extension`,`subject`,`type`,`gradeNum`,`classNum`) VALUES (?,?,?,?,?,?)';
        $stmtu = $conn->prepare($sqltu)->execute([$cMatExt[0],end($cMatExt),'social','material'$stmtg[0],$stmtc[0]]);
        move_uploaded_file($cMatTmp,'../teacherUploads/'.$cMatName);
    }
    if (file_exists($cAs['tmp_name']) || is_uploaded_file($cAs['tmp_name'])){
        $cAsName = $cAs['name'];
        $cAsTmp = $cAs['tmp_name'];
        $cAsSize = $cAs['size'];
        $cAsExt = explode('.',$cAsName);

        $sqltu = 'INSERT INTO teacheruploads (`fileN`,`extension`,`subject`,`type`,`gradeNum`,`classNum`) VALUES (?,?,?,?,?,?)';
        $stmtu = $conn->prepare($sqltu)->execute([$cAsExt[0],end($cAsExt),'social','assignment'$stmtg[0],$stmtc[0]]);
        move_uploaded_file($cMatTmp,'../teacherUploads/'.$cAsName);
    }
}
header("Location: addCourseMaterial.php");
?>