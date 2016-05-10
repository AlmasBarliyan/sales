<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dropdown Depedency - Studi kasus Pemilihan Propinsi Indonesia</title>
        {{ HTML::script("js/jquery.min.js") }}
    </head>
    <body>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#sPropinsi').on('change', function(){
                $.post('{{ URL::to('site/data') }}', {type: 'kota', id: $('#sPropinsi').val()}, function(e){
                    $('#sKota').html(e);
                });
                
                $('#sKecamatan').html('');
                $('#sDesa').html('');
                
            });
            $('#sKota').on('change', function(){
                $.post('{{ URL::to('site/data') }}', {type: 'kecamatan', id: $('#sKota').val()}, function(e){
                    $('#sKecamatan').html(e);
                });
                $('#sDesa').html('');
            });
            $('#sKecamatan').on('change', function(){
                $.post('{{ URL::to('site/data') }}', {type: 'desa', id: $('#sKecamatan').val()}, function(e){
                    $('#sDesa').html(e);
                });
            });
            });
        </script>
    </body>
</html>