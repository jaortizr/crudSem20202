<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>CRUD / Sem-20202</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
<link href="./js/plugins/validetta/validetta.min.css" rel="stylesheet">
<link href="./js/plugins/confirm/jquery-confirm.min.css" rel="stylesheet">
<link href="./css/general.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="./js/plugins/validetta/validetta.min.js"></script>
<script src="./js/plugins/validetta/validettaLang-es-ES.js"></script>
<script src="./js/plugins/confirm/jquery-confirm.min.js"></script>
<script src="./js/index.js"></script>
</head>
<body>
    <?php
        readfile("./pages/fix/header.html");
    ?>
    <main class="valign-wrapper">
        <div class="container">
            <form id="formIndex" autocomplete="off">
            <div class="row">
                <div class="col s12 m6 input-field">
                    <i class="fas fa-user prefix blue-text"></i>
                    <label for="boleta">Boleta</label>
                    <input type="text" id="boleta" name="boleta" maxlength="10" data-validetta="required,number,minLength[8],maxLength[10]">
                </div>
                <div class="col s12 m6 input-field">
                    <i class="fas fa-key prefix blue-text"></i>
                    <label for="contrasena">Contrase&ntilde;a</label>
                    <input type="password" id="contrasena" name="contrasena" data-validetta="required,minLength[6]">
                </div>
                <div class="col s12 input-field">
                    <input type="submit" class="btn blue" value="Entrar" style="width: 100%;">
                </div>
            </div>
            </form>
        </div>
    </main>
    <?php
        readfile("./pages/fix/footer.html");
    ?>
</body>
</html>