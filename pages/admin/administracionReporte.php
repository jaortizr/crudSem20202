<?php
    session_start();
    if(isset($_SESSION["admin"])){
        include("./../fix/configBD.php");
        include("./administracionReporte_BD.php");        
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>CRUD - TW - 20202 - Administraci&oacute;n</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
<link href="./../../css/general.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>
    //De esta manera podemos 'intercambiar' datos del back-end con el front-end
    var femeninos = <?php echo $femeninos; ?>;
    var masculinos = <?php echo $masculinos; ?>;
    var edades_x = <?php echo json_encode($rangoEdades); ?>;
    var edades_y = <?php echo json_encode($numEdades); ?>;
</script>
<script src="./../../js/administracionReporte.js"></script>
</head>
<body>
    <header>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <div id="genCircular"></div>
                </div>
                <div class="col s12 m6">
                    <div id="genBarras"></div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div id="edadBarras"></div>
                </div>
            </div>
            <div class="row center-align">
                <a href="./administracion.php" class="btn teal">Regresar</a>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
<?php
    }else{
        header("location:./");
    }
?>