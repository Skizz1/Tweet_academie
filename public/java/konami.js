//Haut, haut, bas, bas, gauche, droite, gauche, droite, B, A
var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
    n = 0,
    $random = '',
    $sleep = '',
    $time = '',
    $position = '',
    $size = '',
    $class = '',
    $clas = '';

$(document).keydown(function (e) {
    if (e.keyCode === k[n++]) {
        if (n === k.length) {
            $('.cloud').css({'opacity': '0'});

            $('.test, .test2').animate({
                width: "70%",
                opacity: 0,
                marginLeft: "0.6in",
                fontSize: "3em"
            }, 1500);

            $('body').css({
                'background-image': 'url(public/css/images/emma-watson.jpeg)',
                'background-repeat': 'no-repeat',
                'overflow': 'hidden'
            });

            $('#slide2').animate({
                opacity: 0
            }, 1500);

            $('body').append('<div class="oiseau"></div>');
            $('.oiseau').css({
                'width': '700px',
                'height': '800px',
                'position': 'absolute',
                'top': '0', 'left': '30%'
            });


            $('.oiseau').on('click', function () {
                function random(min, max) {
                    return Math.round(Math.random() * (max - min) + min);
                }

                $random = random(50, 100);


                for (var i = 1; i <= $random; ++i) {
                    $sleep = random(100, 300);
                    setTimeout(function () {
                        $time = random(1000, 5000);
                        $position = random(10, 70);
                        $size = random(30, 80) + '%';

                        $clas = 'nuage' + random(1, 100);

                        $('body').append('<div class="' + $clas + '"></div>');
                        $class = '.' + $clas;

                        $($class).css({
                            'width': '300px',
                            'height': '300px',
                            'position': 'absolute',
                            'top': $position + "%", 'left': '-10%',
                            'background': 'url(public/css/images/nuage.svg) no-repeat top left',
                            'background-size': $size
                        });

                        $($class).animate({
                            'left': '200%'
                        }, $time, function () {
                            $(this).remove();
                        });
                    }, $sleep * i);

                }

            });

            var audioElement = document.createElement('audio');
            audioElement.setAttribute('src', 'public/css/leviosa.mp3');
            audioElement.setAttribute('autoplay', 'autoplay');
            $(document).click(function () {
                audioElement.play();
            });

            n = 0;
            return false;
        }
    }
    else {
        n = 0;
    }
});