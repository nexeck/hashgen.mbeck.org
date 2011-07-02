$(document).ready(function() {
  
    function getHash() {
        $.ajax({
            url: 'api.php',
            data: "string="+$('#string').val()+"&algoid="+$("input:radio:checked").val(),
            dataType: "json",
            success: function(data) {
                $('#hash').val(data.hash);
                $('#hashings').html(data.hashings);
                $('#hashbar').fadeIn(1500);
            }
        });
    }
  
    $("ul.tabs").tabs("div.panes > div");
  
    $('#string').keyup(function() {
        getHash();
    });
  
    $('input:radio').change(function() {
        getHash();
    });

    $('form').submit(function(e) {
        e.preventDefault();
        getHash();
    });
  
});