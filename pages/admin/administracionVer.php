<?php
    session_start();
    if(isset($_SESSION["admin"])){
        include("./../fix/configBD.php");
        $boleta = $_GET["boleta"];
        $sqlInfAlmn = "SELECT * FROM alumno WHERE boleta = '$boleta'";
        $resInfAlmn = mysqli_query($conexion, $sqlInfAlmn);
        $infAlmn = mysqli_fetch_row($resInfAlmn);
        $respAX = "
            <h5 class='center-align'>
            Boleta: $infAlmn[0] <br>
            Nombre: $infAlmn[1] $infAlmn[2] $infAlmn[3] <br>
            G&eacute;nero: $infAlmn[4] <br>
            Correo: $infAlmn[5] <br>
            Fecha de Nacimiento: $infAlmn[6]<br>
            Auditoria: $infAlmn[8]
            </h5>
        ";
        echo $respAX;
    }else{
        header("location:./administracion.php");
    }
?>