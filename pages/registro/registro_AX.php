<?php
    include("./../fix/configBD.php");
    include("./../fix/getPosts.php");

    $respAX = [];
    $sqlChckBoleta = "SELECT * FROM alumno WHERE boleta = '$boleta'";
    $resChckBoleta = mysqli_query($conexion,$sqlChckBoleta);
    $infChckBoleta = mysqli_num_rows($resChckBoleta);
    if($infChckBoleta >= 1){
        $respAX["cod"] = 2;
        $respAX["msj"] = "<h5>La Boleta ya est&aacute; registrada. Favor de intentarlo nuevamente.</h5>";
    }else{
        $contrasena = md5($contrasena);
        $sqlInsBoleta = "INSERT INTO alumno VALUES('$boleta','$nombre','$primerApe','$segundoApe','$genero','$correo','$fechaNac','$contrasena',NOW())";
        $resInsBoleta = mysqli_query($conexion,$sqlInsBoleta);
        $infInsBoleta = mysqli_affected_rows($conexion);
        if($infInsBoleta == 1){
            $respAX["cod"] = 1;
            $respAX["msj"] = "<h5>El registro se realiz&oacute; correctamente. Gracias :)</h5>";
        }else{
            $respAX["cod"] = 0;
            $respAX["msj"] = "<h5>No se pudo realizar el registro. Favor de intentarlo nuevamente</h5>";
        }
    }

    echo json_encode($respAX);
?>