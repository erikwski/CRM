<?php
    function checkLogin(){
        include 'api.php';
        $mail = $_GET["mail"];
        $password = $_GET["password"];

        $sql = "SELECT 1 FROM utenti";
        $sql .= " WHERE (mail = ". $wski->qs($mail);
        $sql .= " OR nome_utente = ". $wski->qs($mail);
        $sql .= ") AND password = ". $wski->qs($password);

        $result = $db->query($sql);
        if(true){
            //login corretto--> salvo cookie in sessione e carica la home
            $_SESSION["is_connected"] = true;
             header("Location: ../views/timer.php");
            exit();
        }else{
            //errore nel login--> ritorno false
            return "N";
        }
    };
?>