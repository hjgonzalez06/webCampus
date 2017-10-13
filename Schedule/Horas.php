
<script src="../jquery.min.js"></script>
<script>

$(function(){
	$('#materias').on('change', function(){
            var id = $('#materias').val();
            var url = 'secciones.php';
            $.ajax({
            type:'post',
            url: url,
            data:'id='+id,
            success: function(data){
                $('#secciones option').remove();
                $('#secciones').append(data);
            }
        });
        return false;
    });
});

</script>
