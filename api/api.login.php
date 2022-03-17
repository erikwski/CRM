<?php
    function checkLogin(){
        include 'api.php';
        $mail = $_GET["mail"];
        $password = $_GET["password"];

        $sql = "SELECT nome_utente FROM utenti";
        $sql .= " WHERE (mail = ". $wski->qs($mail);
        $sql .= " OR nome_utente = ". $wski->qs($mail);
        $sql .= ") AND password = ". $wski->qs($password);
        $result = $db->query($sql);
        if($result){
            while ($row = pg_fetch_row($result)) {
                $_SESSION["user_logged"] = $row[0];
                return exit();
            }
            return "Mail e password errati";
        }else{
           //errore nella query
           return "Errore nella login";
        }
    };

    function logout(){
        include 'api.php';
        session_destroy();
    };

    if (isset($_GET['f'])) {
        echo $_GET['f']();
    }
?>