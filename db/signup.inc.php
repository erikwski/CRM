<?php

if(isset($_POST["submit"])){
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    
    $passwordrepeat = $_POST["passwordrepeat"];

    require_once 'connection.php';
    require_once 'function.inc.php';

    
    if(invalidMail($mail) !== false){
        header("location: ../signup.php? error=invalidemail");
        exit();
    }
    
    if(pwdMatch ( $password, $passwordrepeat) !== false){
        header("location: ../signup.php? error=passwordsdontmatch");
        exit();
    }
    if(mailExist ( $con, $mail) !== false){
        header("location: ../signup.php? error=usernametaken");
        exit();
    }

    createUser($con,$mail, $password);

}