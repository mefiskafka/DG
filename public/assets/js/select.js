/**
 * Created by 97019594 on 26/09/2016.
 */

    $(document).ready(function() {
//        debugger;
        var directorioUsuario = $('#identificador').val();

        $('select[name="estructuragerencia_id"]').on('change', function() {
            var estructuragerencia_id = $(this).val();
            if(estructuragerencia_id) {
                $.ajax({
                    dataType: "json",
                    type: "GET",
                    url: 'create/ajax/'+estructuragerencia_id,
                    success:function(data) {
//              alert(data);
                        $('select[name="departamento_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="departamento_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
 $('select[name="departamento_id"]').empty();
            }
        });
    });
