$(document).ready(function(){
    var dataCircGenero = [{
        values:[masculinos,femeninos],
        labels:["Masculinos","Femeninos"],
        type:"pie"
    }];

    var dataBarsGenero = [{
        x:["Masculinos","Femeninos"],
        y:[masculinos,femeninos],
        type:"bar"
    }];

    var dataBarsEdad = [{
        x:edades_x,
        y:edades_y,
        type:"scatter"
    }];
    
    var layout = {
        title:"Alumnos x Genero",
        font:{size:12},
        height: 400
    };

    var layout2 = {
        title:{
            text:"Alumnos x Edades",
            font:{
                size:20,
                color:"#006699"
            }
        },
        xaxis: {
            title: {
              text: "Edades(Años)",
              font: {
                size: 14,
                color: "#545454"
              }
            }
        },
        yaxis: {
            title: {
              text: "Cantidad",
              font: {
                size: 14,
                color: "#545454"
              }
            }
        },
        height: 400
    };

    var config = {
        responsive: true
    };

    Plotly.newPlot("genCircular",dataCircGenero,layout,config);
    Plotly.newPlot("genBarras",dataBarsGenero,layout,config);
    Plotly.newPlot("edadBarras",dataBarsEdad,layout2,config);
});