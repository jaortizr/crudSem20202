<?php
    session_start();
    if(isset($_SESSION["admin"])){
        include("./../fix/configBD.php");
        $boleta = $_GET["boleta"];
        $sqlInfAlmn = "SELECT * FROM alumno WHERE boleta = '$boleta'";
        $resInfAlmn = mysqli_query($conexion, $sqlInfAlmn);
        $infAlmn = mysqli_fetch_row($resInfAlmn);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>TWeb - CRUD Sem. 20202 - Editar</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
<link href="./../../js/plugins/validetta/validetta.min.css" rel="stylesheet">
<link href="./../../js/plugins/confirm/jquery-confirm.min.css" rel="stylesheet">
<link href="./../../css/general.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="./../../js/plugins/validetta/validetta.min.js"></script>
<script src="./../../js/plugins/validetta/validettaLang-es-ES.js"></script>
<script src="./../../js/plugins/confirm/jquery-confirm.min.js"></script>
<script src="./../../js/administracionEditar.js"></script>
</head>
<body>
    <header>
        <div class="fixed-action-btn click-to-toggle">
            <a class="btn-floating btn-large teal">
                <i class="fas fa-ellipsis-h"></i>
            </a>
            <ul>
                <li><a href="./../fix/cerrarSesion.php?nombreSesion=admin" class="btn-floating teal accent-4"><i class="fas fa-power-off"></i></a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <h5>Editar alumno</h5>
            <div class="row">
                <form id="formEditar" autocomplete="off">
                <div class="col s12 m4 input-field">
                    <label for="boleta">Boleta</label>
                    <input type="text" id="boleta" name="boleta" maxLength="10" value="<?php echo $infAlmn[0];  ?>" readonly data-validetta="required,number,minLength[8],maxLength[10]">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $infAlmn[1]; ?>" data-validetta="required">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="primerApe">Primer apellido</label>
                    <input type="text" id="primerApe" name="primerApe" value="<?php echo $infAlmn[2]; ?>" data-validetta="required">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="seundoApe">Segundo apellido</label>
                    <input type="text" id="segundoApe" name="segundoApe" value="<?php echo $infAlmn[3]; ?>" data-validetta="required">
                </div>
                <div class="col s12 m4 input-field">
                    <select id="genero" name="genero" data-validetta="required">
                        <option value="">--- Seleccionar ---</option>
                        <?php 
                            if($infAlmn[4] == "M"){
                                echo "<option value='M' selected>Masculino</option>
                                <option value='F'>Fememnino</option>";
                            }else{
                                echo "<option value='M'>Masculino</option>
                                <option value='F' selected>Femenino</option>";
                            }
                        ?>
                        <option value="O">Otro</option>
                    </select>
                    <label for="genero">G&eacute;nero</label>
                </div>
                <div class="col s12 m4 input-field">
                    <label for="correo">Correo</label>
                    <input type="text" id="correo" name="correo" value="<?php echo $infAlmn[5]; ?>" data-validetta="required,email">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="fechaNac">Fecha de nacimiento</label>
                    <input type="text" class="datepicker" id="fechaNac" name="fechaNac" readonly value="<?php echo $infAlmn[6]; ?>" data-validetta="required">
                </div>
                <div class="col s12 m4 input-field">
                    <a href="./administracion.php" class="btn orange" style="width:100%;">Cancelar</a>
                </div>
                <div class="col s12 m4 input-field">
                    <input type="submit" class="btn blue" style="width:100%;" value="Actualizar">
                </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
<?php
    }else{
        header("location:./administracion.php");
    }
?>