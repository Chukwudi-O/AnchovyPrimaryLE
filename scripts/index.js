admin_b = document.getElementById("adminB");
teacher_b = document.getElementById("teacherB");
student_b = document.getElementById("studentB");




function redirect(to){
	if (to === "admin"){
		console.log("Admin Clicked.");
		document.location.href="adminlogin.html";
	}else if (to === "teach"){
		console.log("Teacher Clicked.");
		document.location.href="teacherLogin.html";
	}else if (to === "stud"){
		console.log("Student Clicked.");
		document.location.href="studentLogin.html";
	}
}
