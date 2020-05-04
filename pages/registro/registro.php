<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>CRUD - TW - 20202 - Registro</title>
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
<script src="./../../js/registro.js"></script>
</head>
<body>
    <?php
        readfile("./../fix/header.html");
    ?>
    <main class="valign-wrapper">
        <div class="container">
            <div class="row">
                <h4 class="deep-orange-text accent-2">Registro de datos</h4>
                <form id="formRegistro" autocomplete="off">
                <div class="col s12 m4 input-field">
                    <label for="boleta">Boleta</label>
                    <input type="text" id="boleta" name="boleta" maxLength="10" data-validetta="required,number,minLength[8],maxLength[10]">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" data-validetta="required">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="primerApe">Primer apellido</label>
                    <input type="text" id="primerApe" name="primerApe" data-validetta="required">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="seundoApe">Segundo apellido</label>
                    <input type="text" id="segundoApe" name="segundoApe" data-validetta="required">
                </div>
                <div class="col s12 m4 input-field">
                    <select id="genero" name="genero" data-validetta="required">
                        <option value="">--- Seleccionar ---</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="O">Otro</option>
                    </select>
                    <label for="genero">G&eacute;nero</label>
                </div>
                <div class="col s12 m4 input-field">
                    <label for="correo">Correo</label>
                    <input type="text" id="correo" name="correo" data-validetta="required,email">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="fechaNac">Fecha de nacimiento</label>
                    <input type="text" class="datepicker" id="fechaNac" name="fechaNac" readonly data-validetta="required">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="contrasena">Contrase&ntilde;a</label>
                    <input type="password" id="contrasena" name="contrasena" data-validetta="required,minLength[6],equalTo[contrasena2]">
                </div>
                <div class="col s12 m4 input-field">
                    <label for="contrasena2">Confirmar contrase&ntilde;a</label>
                    <input type="password" id="contrasena2" name="contrasena2" data-validetta="required,minLength[6],equalTo[contrasena]">
                </div>
                <div class="col s12 m6 input-field">
                    <a href="./../../index.php" class="btn orange" style="width:100%;">Cancelar</a>
                </div>
                <div class="col s12 m6 input-field">
                    <input type="submit" class="btn blue" style="width:100%;" value="Registrar">
                </div>
                </form>
            </div>
        </div>
    </main>
    <?php
        readfile("./../fix/footer.html");
    ?>
</body>
</html>