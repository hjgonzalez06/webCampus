
var codigoMateria;
var seccionesInscribir="";


function remover(codigo) {

    var listaMateria = document.getElementById(codigo).parentNode;
    var materia = document.getElementById(codigo);
    listaMateria.removeChild(materia);


}

function reintegrar(codigo) {

}

function removerEsp(codigo) {


    $("#"+codigo).each(function () {
        $(this).closest("tr").remove();
    });


}

function mostrarSec(materia) {

    codigoMateria = materia;

    var codigo = {"codigo" : materia};


    $.ajax({
        data: codigo,
        url: "secciones.php",
        type: "POST",

        success: function(codigo){

            $("#secciones option").remove();
            $("#secciones").append(codigo);

        }
    });


}

function inscribir() {

    var codigoSeccion = $("#secciones option:selected").val();


    $("#secciones option").remove();
    remover(codigoMateria);

    seccionesInscribir +=codigoSeccion+"%";

    $.ajax({

        data: "id="+codigoSeccion,
        url: "inscritas.php",
        type: "POST",

        success: function (data) {

            $("#form2").append(data);

        }

    });

}




function finalizar() {

    var materias = "materias="+seccionesInscribir;

    $.ajax({
        data: materias,
        url: "inscritas.php",
        type: "POST",

        success: function (data) {

            $("#inscritas").load("materias.php");


        }
    })

}





