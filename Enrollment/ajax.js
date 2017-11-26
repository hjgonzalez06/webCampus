
var codigoMateria;
var seccionesInscribir="";
var seccionesDesinsribir = "";


$(document).ready(function () {

    $("#botRetirar").click(function () {

        var arrayID = [1, 4, 7, 10, 13, 16, 19, 22, 25, 28, 31];
        var desCodigo = $("#secciones option").val();
        var padre = document.getElementById("form2");

        arrayID.forEach(function (id) {

            if (padre[id].id == desCodigo) {

                seccionesDesinsribir += desCodigo+"%";
                padre[id].closest("tr").remove();
                desinscribir(desCodigo);

            }

        });

    });

    function desinscribir(codigo) {

        $.ajax({

            data: "noins="+codigo,
            url: "inscritas.php",
            type: "POST",

            success: function(data) {

                $(".matedescritas").append(data);

            }

        });

    }

    $("#botInscribir").click(function () {

        var codigoSeccion = $("#secciones option:selected").val();


        $("#secciones option").remove();
        remover(codigoMateria);

        seccionesInscribir +=codigoSeccion+"%";

        $.ajax({

            data: "id="+codigoSeccion,
            url: "inscritas.php",
            type: "POST",

            success: function (data) {

                $(".matecritas").append(data);

            }

        });

    });

    $("#finalizar").click(function () {

        //var res = confirm('¿Está seguro(a) de formalizar su inscripción? Una vez hecho ésto, no se podrán realizar cambios.');

        //if(res){

            if (!(seccionesInscribir.length == 0)){

                var materias = "materias="+seccionesInscribir;

                $.ajax({
                    data: materias,
                    url: "inscritas.php",
                    type: "POST",

                    success: function (data) {

                        $("#inscritas").load("materias.php");

                    }
                });

            }else if(!(seccionesDesinsribir.length == 0)){

                var noMaterias = "return="+seccionesDesinsribir;

                $.ajax({
                    data: noMaterias,
                    url: "inscritas.php",
                    type: "POST"

                });

            }
            
        //}

        seccionesDesinsribir="";
        seccionesInscribir="";

    })



});

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

function remover(codigo) {

    var listaMateria = document.getElementById(codigo).parentNode;
    var materia = document.getElementById(codigo);
    listaMateria.removeChild(materia);

}





