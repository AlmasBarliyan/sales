var timer;

function up() 
{
    timer = setTimeout(function ()
    {   
        var keywords =  $('#search_input').val();
        var theTbl = document.getElementById('my-table');
        if (keywords.length > 0)
        {
            //for (var i = 0; i <= keywords.length; i++) {
                $.post('http://localhost/cj_sales/executeSearch',{keywords: keywords},function (markup)
                {
                    $('#search-results').html(markup);
                });
            //}
        }
    },500);
}

function down() 
{
    clearTimeout(timer);
}