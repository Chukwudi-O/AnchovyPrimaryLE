<!DOCTYPE html>
<html>
<head>
    <title>APSLE - Add Course Material</title>
    <link rel="stylesheet" type="text/css" href="../styles/addCourseMaterial.css">
</head>
<body>
    <h1>ANCHOVY PRIMARY SCHOOL LEARNING ENVIRONMENT</h1>
    <div class="mainDiv">
        <h1>Add course material</h1>
        <p>Add course materials for your subjects in the form of pdf files, micorsoft word file, images 
        
        <h2>Mathematics</h2>
        <form action="teacherUpload.php" method="post" enctype="multipart/form-data">
            Add Course Material: <input type="File" name="mathmat" id="mCMat" accept="image/*,.pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            <br><br>
            Add Assignments : <input type="File" name="mathas" id="mCAs" accept="image/*,.pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            <button type="submit" name="mathsub">Submit Files</button>
        </form>
        <br><hr><br>

        <h2>English</h2>
        <form action="teacherUpload.php" method="post" enctype="multipart/form-data">
            Add Course Material: <input type="File" name="englishmat" accept="image/*,.pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            <br><br>
            Add Assignments : <input type="File" name="englishas" accept="image/*,.pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            <button type="submit" name="engsub">Submit Files</button>
        </form>
        <br><hr><br>

        <h2>Science</h2>
        <form action="teacherUpload.php" method="post" enctype="multipart/form-data">
            Add Course Material: <input type="File" name="sciencemat" accept="image/*,.pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            <br><br>
            Add Assignments : <input type="File" name="scienceas" accept="image/*,.pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            <button type="submit" name="scisub">Submit Files</button>
        </form>
        <br><hr><br>

        <h2>Social Studies</h2>
        <form action="teacherUpload.php" method="post" enctype="multipart/form-data">
            Add Course Material: <input type="File" name="socialmat" accept="image/*,.pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            <br><br>
            Add Assignments : <input type="File" name="socialas" accept="image/*,.pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            <button type="submit" name="socsub">Submit Files</button>
        </form>
        <br><hr><br>
    </div>

</body>
</html>