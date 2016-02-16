//Haut, haut, bas, bas, gauche, droite, gauche, droite, B, A
var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
    n = 0;
$(document).keydown(function (e) {
    if (e.keyCode === k[n++]) {
        if (n === k.length) {
            $('.cloud').css({'opacity': '0'});

            $('.test').animate({
                width: "70%",
                opacity: 0,
                marginLeft: "0.6in",
                fontSize: "3em"
            }, 1500);

            $('.test2').animate({
                width: "70%",
                opacity: 0,
                marginLeft: "0.6in",
                fontSize: "3em"
            }, 1500);

            $('body').css({'background-image': 'url(public/css/images/emma-watson.jpeg)', 'background-repeat': 'no-repeat', 'overflow': 'hidden'});

            $('#slide2').animate({
                opacity: 0
            }, 1500);

            $('body').append('<iframe id="hermione" width="420" height="315" src="https://www.youtube.com/embed/w3Cg-dQPqhI?autoplay=1" frameborder="0" allowfullscreen></iframe>');
            $('#hermione').css({'position': 'absolute', 'display' : 'none'});

            n = 0;
            return false;
        }
    }
    else {
        n = 0;
    }
});