<?php
    session_start();
    include("./../fix/getPosts.php");

    $contrasena = md5($contrasena);
    $respAX = [];
    if($usuario == "admin" && $contrasena == "a72a7876e55aabd392098de4627206d9"){ //'tweb20202'
        $_SESSION["admin"] = "bepti";
        $respAX["cod"] = 1;
        $respAX["msj"] = "<h5 class='center-align'>Bienvenido :)</h5>";
    }else{
        $respAX["cod"] = 0;
        $respAX["msj"] = "<h5 class='center-align'>No coinciden los datos. Favor de intentarlo nuevamente</h5>";
    }

    echo json_encode($respAX);
?>