<?php
    /**
     * APARTADO A
     */
    // Primero recibimos la información del form y vemos si exise la cookie o no
    if (isset($_COOKIE["username"])) {
        // Si nuestro navegador contiene cookies, actualizamos el tiempo de vida de nuevo a una semana
        setcookie("usuario",$_COOKIE["username"],time()+3600*24*7);
    } else{
        iniciarSesion();
    }
    
    function iniciarSesion(){
        //setcookie("usuario",1,time()+3600*24*7);
        echo '<from action="procesarForm.php" method="POST>"';
        echo '<input type="text" name="username">';
        echo '<input type="password" name="password">';
        echo '</form>';
    }

    /**
     * APARTADO B
     */
    // Primero recibimos la información del form y vemos si exise la cookie o no
    if (isset($_COOKIE["username"])) {
        // Si nuestro navegador contiene cookies, actualizamos el tiempo de vida de nuevo a una semana
        setcookie("usuario",$_COOKIE["username"],time()+3600*24*7);
        temaLeido();
    } else{
        iniciarSesion();
    }

    function temaLeido(){
        $nombreCookie = "cesta_de_".$_COOKIE["nombreUsuario"];
        echo '<style>
            a.Tema:visited{color: blue}
        </style>';
    }

?>