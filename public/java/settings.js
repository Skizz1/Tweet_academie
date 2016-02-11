$(document).ready(function(){
    $('#formEmail').hide();
    $('#formPassword').hide();

    $('#login').on('click', function(e){
        e.preventDefault();
        if ($('#formLogin').is(':visible')){
            $('#formLogin').hide();
        } else {
            $('#formLogin').show();
        }
    });

    $('#mail').on('click', function(e){
        e.preventDefault();
        if ($('#formEmail').is(':visible')){
            $('#formEmail').hide();
        } else {
            $('#formEmail').show();
        }
    });

    $('#pass').on('click', function(e){
        e.preventDefault();
        if ($('#formPassword').is(':visible')){
            $('#formPassword').hide();
        } else {
            $('#formPassword').show();
        }
    });
});