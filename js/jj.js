$(function() {
    var dialog = $("#dialog" ).dialog({
      autoOpen: false,
      height: 300,
      width: 350,
      modal: true,
      buttons: {
           "Create an account": addUser,
        Cancel: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
       //Do Something
      }
    });

    $( ".milk_a_class" ).on( "click", function() {
      dialog.dialog( "open" );
    });

     function addUser(){
         var selectedItem = $("#myselect option:selected" ).text();
        $("input[name^=milk_input_name]").val(selectedItem);
          dialog.dialog( "close" );
     }
  });