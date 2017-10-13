$(document).ready(function() {

    $('.mat').click(function(e){

        var id = e.target.id;
        var nombre = $('#nombre').val();

        $.ajax({
            type: "POST",
            url: "secciones.php",
            data:'id='+id,
            success: function(data) {
                $('#secciones option').remove();
                $('#secciones').append(data);
            }
        });
        
        $('#bot1').click(function(e){
            var sec = $('#secciones').val();

            $.ajax({
                type: "POST",
                url: "materias.php",
                data:{codigo: id, seccion: sec, nombre: nombre},
                success: function(data) {
                   $('.Ins').html(data);
                }
            });
            return false;
        });
        
        $('#bot1').click(function(){
            $("#act").load("complement_enrollment.php");
            $("#secciones").load("secciones.php");
            return false;
        });
        return false;
    });
        
    $('.mate').click(function(e){

        var id = e.target.id;
        
        $('#bot2').click(function(e){
            $.ajax({
                type: "POST",
                url: "materias.php",
                data:{codDel: id},
                success: function(data) {
                   $('.Ins').html(data);
                   id=null;
                }
            });
            return false;
        });
        
        $('#bot2').click(function(){
            $("#act").load("complement_enrollment.php");
            $("#secciones").load("secciones.php");
            return false;
        });
        return false;
    });
});
