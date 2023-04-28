<?php


require "vendor/autoload.php";
session_start();
if(isset($_POST['register'])) {
    $_SESSION['complete_name'] = $_POST['complete_name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['birthdate'] = $_POST['birthdate'];
    header("Location: quiz.php");
    exit();
}
session_destroy();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
</head>
<body>


    <h1>Analogy Exam Registration</h1>
    <h3>Kindly register your basic information before starting the exam.</h3>


    <form method="post" action="register.php">
    Enter your full Name:<br />
    <input type="text" name="complete_name" placeholder="Full Name" required>
    <br>
    Email:<br />
    <input type="email" name="email" placeholder="Email" required>
    <br>
    Birthdate:
    <input type="date" name="birthdate" required>
    <br>
    Gender:<br />
    <input type="radio" name="gender" value="male" />Male<br />
	<input type="radio" name="gender" value="female" />Female<br />
    <button type="submit" name="register">Register</button>
   
    </form>


</body>
</html>

