<?php
    $user = "root";
    $pass = "";

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=immoeliza',$user,$pass);
    }
    catch (pdo_exception $e) {
        print "<p>erreur de connexion</p>";
        exit();
    }

?>