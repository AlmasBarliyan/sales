<select name="lot_number[]" id="mn">
@foreach($searchInventory as $si)
    <option></option>
	<option value="{{$si->material_name}}">{{$si->po_no}}</option>
@endforeach
</select>
<p id="ln"></p>
<script type="text/javascript">
    $(document).ready(function() {
        $('#mn').on('change', function(){
        $.post('{{ URL::to('execute/data') }}', {type: 'lotnumber', id: $('#mn').val()}, function(e){
            $('#ln').html(e);
        });
        
        $('#sMaterial').html('');
        $('#sDesa').html('');
        
    });
    $('#sLotnumber').on('change', function(){
        $.post('{{ URL::to('delivery/data') }}', {type: 'material', id: $('#sLotnumber').val()}, function(e){
            $('#sMaterial').html(e);
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