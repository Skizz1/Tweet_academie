$(document).ready(function(){
    $('#formLogin').hide();
    $('#formEmail').hide();
    $('#formPassword').hide();
    $('#formDesactive').hide();
    $('#formImage').hide();
    $('#formNom').hide();
    $('#formPrenom').hide();
    $('#formPostal').hide();
    $('#formAdress').hide();
    $('#formDepartment').hide();
    $('#formRegion').hide();
    $('#formCity').hide();
    $('#formCountry').hide();
    $('#formAnniv').hide();

    $('.clic').on("click", function(e) {
        $(".clic").removeClass("un").css({"color":"rgba(37, 116, 106, 0.5)","background":"white"});
        $(this).addClass("un").css({"color":"white","background":"rgba(32, 170, 197, 0.5)"});
    });

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

    $('#desactive').on('click', function(e){
        e.preventDefault();
        if ($('#formDesactive').is(':visible')){
            $('#formDesactive').hide();
        } else {
            $('#formDesactive').show();
        }
    });

    $('#image').on('click', function(e){
        e.preventDefault();
        if ($('#formImage').is(':visible')){
            $('#formImage').hide();
        } else {
            $('#formImage').show();
        }
    });
    $('#nom').on('click', function(e){
        e.preventDefault();
        if ($('#formNom').is(':visible')) {
            $('#formNom').hide();
        } else {
            $('#formNom').show();
        }
    });
    $('#prenom').on('click', function(e){
        e.preventDefault();
        if ($('#formPrenom').is(':visible')) {
            $('#formPrenom').hide();
        } else {
            $('#formPrenom').show();
        }
    });
    $('#postal').on('click', function(e){
        e.preventDefault();
        if ($('#formPostal').is(':visible')) {
            $('#formPostal').hide();
        } else {
            $('#formPostal').show();
        }
    });
    $('#adress').on('click', function(e){
        e.preventDefault();
        if ($('#formAdress').is(':visible')) {
            $('#formAdress').hide();
        } else {
            $('#formAdress').show();
        }
    });
    $('#department').on('click', function(e){
        e.preventDefault();
        if ($('#formDepartment').is(':visible')) {
            $('#formDepartment').hide();
        } else {
            $('#formDepartment').show();
        }
    });
    $('#region').on('click', function(e){
        e.preventDefault();
        if ($('#formRegion').is(':visible')) {
            $('#formRegion').hide();
        } else {
            $('#formRegion').show();
        }
    });
    $('#city').on('click', function(e){
        e.preventDefault();
        if ($('#formCity').is(':visible')) {
            $('#formCity').hide();
        } else {
            $('#formCity').show();
        }
    });
    $('#country').on('click', function(e){
        e.preventDefault();
        if ($('#formCountry').is(':visible')) {
            $('#formCountry').hide();
        } else {
            $('#formCountry').show();
        }
    });
    $('#anniv').on('click', function(e){
        e.preventDefault();
        if ($('#formAnniv').is(':visible')) {
            $('#formAnniv').hide();
        } else {
            $('#formAnniv').show();
        }
    });
});