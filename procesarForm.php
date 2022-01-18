<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(comprobarPassword($username, $password)){// Suponemos que hay una función que comprueba si coincide la contraseña
        header("Location: /private.php/user=$user");
    } else {
        header("Location: www.forosteleco.com");
    }
?>