$(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();

    //Nos ayudamos del evento on() de jQuery  [https://www.w3schools.com/jquery/event_on.asp] ya que las clases '***Almn' se generan de forma dinámica y no están disponibles en primera instancia para el DOM de JS
    var boleta;
    $("main").on("click",".verAlmn",function(){
        boleta = $(this).attr("data-ver");
        var titulo = "<h2>CRUD - TW - 20202</h2>";
        //En algunos casos podemos ahorrarnos algunas líneas de código haciendo uso de la posibilidad que desde el plugin de confirm.js se hgan peticiones AJAX
        $.confirm({
            title:titulo,
            content: "url:./administracionVer.php?boleta="+boleta,
            theme:"supervan",
            icon:"fas fa-eye fa-2x"
        });
    });

    $("main").on("click",".editarAlmn",function(){
        boleta = $(this).attr("data-editar");
        alert("Editar - "+ boleta);
    });

    $("main").on("click",".eliminarAlmn",function(){
        boleta = $(this).attr("data-eliminar");
        alert("Eliminar - "+ boleta);
    });

    $("main").on("click",".pdfAlmn",function(){
        boleta = $(this).attr("data-pdf");
        window.location.href = "./administracionPDF.php?boleta="+boleta;
    });

    $("main").on("click",".correoAlmn",function(){
        boleta = $(this).attr("data-correo");
        window.location.href = "./administracionCorreo.php?boleta="+boleta;
    });
});