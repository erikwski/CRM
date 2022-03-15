<?php

function emptyInputSignup($mail, $pwd, $passwordrepeat){
    $result;
    if (empty($mail)  || empty($password) ||empty($passwordrepeat)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}


function invalidMail($mail){
    $result;
    if (!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $passwordrepeat){
    $result;
    if ($password !== $passwordrepeat){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function mailExist($con, $mail){
    $sql = "SELECT * FROM pwd_clienti WHERE  mail = ?;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
    exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $mail );
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


function createUser($con, $mail, $password){
    $sql = "INSERT INTO pwd_cliente (mail, password) VALUES (?, ?);";
    $stmt = mysqli_stm_init($con);
    if(!mysqli_stm_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
    exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $mail, $hashedPwd );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();

    

    
}
