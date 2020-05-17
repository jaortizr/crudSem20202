$(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();

    var boleta;
    var titulo = "<h2>CRUD - TW - 20202</h2>";

    //Nos ayudamos del evento on() de jQuery  [https://www.w3schools.com/jquery/event_on.asp] ya que las clases '***Almn' se generan de forma dinámica y no están disponibles en primera instancia para el DOM de JS
    $("main").on("click",".verAlmn",function(){
        boleta = $(this).attr("data-ver");
        //En algunos casos podemos ahorrarnos algunas líneas de código haciendo uso de la posibilidad que desde el plugin de confirm.js se hagan peticiones AJAX
        $.alert({
            title:titulo,
            content: "url:./administracionVer_AX.php?boleta="+boleta,
            theme:"supervan",
            icon:"fas fa-eye fa-2x"
        });
    });

    $("main").on("click",".editarAlmn",function(){
        boleta = $(this).attr("data-editar");
        window.location.href = "./administracionEditar.php?boleta="+boleta;
    });

    $("main").on("click",".eliminarAlmn",function(){
        boleta = $(this).attr("data-eliminar");
        $.confirm({
            title:titulo,
            content:"<h5>Est&aacute; seguro de eliminar el registro de la Boleta: "+boleta+"</h5>",
            theme:"supervan",
            icon:"fas fa-times",
            buttons:{
                Sí:function(){
                    $.alert({
                        title:titulo,
                        content: "url:./administracionEliminar_AX.php?boleta="+boleta,
                        theme:"supervan",
                        icon:"fas fa-times fa-2x",
                        onDestroy:function(){
                            location.reload();
                        }
                    });
                },
                No:function(){
                }
            }
        });
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