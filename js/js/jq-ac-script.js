$(document).ready(function(){

    // Use the .autocomplete() method to compile the list based on input from user
    $('#itemCode').autocomplete({
        source: 'data/item-data.php',
        minLength: 1,
        select: function(event, ui) {
            var $itemrow = $(this).closest('tr');
                    // Populate the input fields from the returned values
                    $itemrow.find('#itemCode').val(ui.item.itemCode);
                    $itemrow.find('#itemDesc').val(ui.item.itemDesc);
                    $itemrow.find('#itemPrice').val(ui.item.itemPrice);

                    // Give focus to the next input field to recieve input from user
                    $('#nicklot').focus();

            return false;
	    }
    // Format the list menu output of the autocomplete
    }).data( "autocomplete" )._renderItem = function( ul, item ) {
        return $( "<li></li>" )
            .data( "item.autocomplete", item )
            .append( "<a>" + item.itemCode + " - " + item.itemDesc + "</a>" )
            .appendTo( ul );
    };

    // Get the table object to use for adding a row at the end of the table
    var $itemsTable = $('#itemsTable');

    // Create an Array to for the table row. ** Just to make things a bit easier to read.
    var rowTemp = [
        '<tr class="item-row">',
            '<td><a id="deleteRow"><img src="images/images/icon-minus.png" alt="Remove Item" title="Remove Item"></a></td>',
            '<td><input style="width:50px" name="material_code[]" value="" class="tInput" id="itemCode" tabindex="1"/></td>',
            '<td><input name="material_name[]" value="" class="tInput" id="itemDesc"  readonly="readonly" /></td>',
            '<td style="width:200px"><input style="width:50px" name="nicklot[]" value="" class="tInput" id="itemPrice" readonly="readonly" /><input tabindex="2" style="width:130px" type="text" placeholder="161230" class="tInput" name="nolot[]" id="nicklot"></td>',
            '<td><input name="qty[]" value="" class="tInput" id="itemQty" tabindex="2"/></td>',
            '<td><select name="status[]" class="tInput"><option value="G">Good</option><option value="B">Bad</option></select></td>',
        '</tr>'
    ].join('');

    // Add row to list and allow user to use autocomplete to find items.
    $("#addRow").bind('click',function(){

        var $row = $(rowTemp);

        // save reference to inputs within row
        var $itemCode 	        = $row.find('#itemCode');
        var $itemDesc 	        = $row.find('#itemDesc');
        var $itemPrice	        = $row.find('#itemPrice');
        var $itemQty	        = $row.find('#itemQty');
        
        var $nicklot            = $row.find('#nicklot');

        if ( $('#itemCode:last').val() !== '' ) {

            // apply autocomplete widget to newly created row
            $row.find('#itemCode').autocomplete({
                source: 'data/item-data.php',
                minLength: 1,
                select: function(event, ui) {
                    $itemCode.val(ui.item.itemCode);
                    $itemDesc.val(ui.item.itemDesc);
                    $itemPrice.val(ui.item.itemPrice);
                    $itemQty.val(ui.item.itemQty);
                    

                    // Give focus to the next input field to recieve input from user
                    $nicklot.focus();

                    return false;
                }
            }).data( "autocomplete" )._renderItem = function( ul, item ) {
                return $( "<li></li>" )
                    .data( "item.autocomplete", item )
                    .append( "<a>" + item.itemCode + " - " + item.itemDesc + "</a>" )
                    .appendTo( ul );
            };
            // Add row after the first row in table
            $('.item-row:last', $itemsTable).after($row);
            $($itemCode).focus();

        } // End if last itemCode input is empty
        return false;
    });

    /*$('#itemCode').focus(function(){
        window.onbeforeunload = function(){ return "You haven't saved your data.  Are you sure you want to leave this page without saving first?"; };
    });*/

}); // End DOM

	// Remove row when clicked
	$("#deleteRow").live('click',function(){
		$(this).parents('.item-row').remove();
        // Hide delete Icon if we only have one row in the list.
        if ($(".item-row").length < 2) $("#deleteRow").hide();
	});
