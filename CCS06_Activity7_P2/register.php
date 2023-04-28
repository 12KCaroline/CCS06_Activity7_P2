<?php

require "vendor/autoload.php";

session_start();


try {
    if(isset($_POST['register'])) {
        $_SESSION['user_fullname'] = $_POST['complete_name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['birthdate'] = $_POST['birthdate'];
        header("Location: quiz.php");
        exit();
    
    } else {
        throw new Exception('Missing the basic information.');
    }
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
}