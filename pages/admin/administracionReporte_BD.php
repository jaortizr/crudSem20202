<?php
    $sqlGenero = "SELECT genero, COUNT(*) FROM alumno GROUP BY genero";
    $resGenero = mysqli_query($conexion, $sqlGenero);
    $masculinos = $femeninos = "";
    while($filas = mysqli_fetch_array($resGenero,MYSQLI_BOTH)){
        if($filas[0] == "F") $femeninos = $filas[1];
        else $masculinos = $filas[1];
    }

    //Obtener la edad de cada alumno, al día de hoy, con base a su fecha de nacimiento e identificando de manera única cada una de estas (con GROUP BY). Conocer cada una de las edades registradas.
    $sqlRangoEdades = "SELECT TIMESTAMPDIFF(YEAR,fechaNac,CURDATE()) AS edad FROM alumno GROUP BY edad";
    $resRangoEdades = mysqli_query($conexion, $sqlRangoEdades);
    $rangoEdades = [];
    while($filas = mysqli_fetch_array($resRangoEdades,MYSQLI_BOTH)){
        array_push($rangoEdades,$filas[0]);
    }

    //Obtenemos las edades de cada alumno con base a su fecha de nacimiento y posteriormente con 'array_count_values()' contamos cuantos hay de cada edad identificada y a su vez extraemos solo los valores del arreglo generado por 'array_count_values()' (que devuelve un arreglo asociativo) con 'array_values()' que nos genera un arreglo normal (con índices numéricos).
    $sqlEdades = "SELECT TIMESTAMPDIFF(YEAR,fechaNac,CURDATE()) AS edad FROM alumno ORDER BY edad ASC";
    $resEdades = mysqli_query($conexion,$sqlEdades);
    $edades = [];
    while($filas = mysqli_fetch_array($resEdades,MYSQLI_BOTH)){
        array_push($edades,$filas[0]);
    }
    $numEdades = array_values(array_count_values($edades));

    //Al ordenar y agrupar logramos que los arreglos $rangoEdades y $numEdades tengan una relación directa entre sus índices, es decir, el índice [0] del primero indica la edad más pequeña y el índice[0] del segundo indica cuantos tienen esa edad.
?>