<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(comprobarPassword($username, $password)){// Suponemos que hay una función que comprueba si coincide la contraseña
        echo 'Bienvenido'.$username;
        setcookie("user",1,time()+3600*24*7);
        header("Location: /private.php/user=$user");
    } else {
        echo 'No coincide la contraseña o el Nombre de Usuario.';
        header("Location: www.forosteleco.com");
    }
?>