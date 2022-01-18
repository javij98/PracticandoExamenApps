<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="http://www.google.com" class="Tema">Google</a>
    <a href="http://mail.google.com" class="Tema">Gmail</a>
    <a href="http://www.youtube.com" class="Tema">Youtube</a>

    <?php

        if (isset($_COOKIE["user"])) {
            setcookie("user",$_COOKIE["user"]+1,time()+3600);// Una hora de tiempo de vida
            pintar();
            if ($_COOKIE["user"]>=1) {
                
            }
        } else {
            setcookie("user",2,time()+3600);
            header("Location:ProbandoOnClick.php");
            pintar();
        }
        
        function pintar(){
            echo "<style>a.Tema:visited{background-color: blue}</style>";
        }
    ?>
</body>
</html>