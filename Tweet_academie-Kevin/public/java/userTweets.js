$(document).ready(function () {

    $(document).on('click', '#Ajax-tweetCount', function (e) {
        e.preventDefault();
        content = "";

        $('#Ajax-Rsearch').animate({opacity: 0}, 1000);
        setTimeout(function () {
            $('#Ajax-TimeLine').hide();
            $('#Ajax-Rsearch').append('<div id="Ajax-userTweets"></div>');
            $('#Ajax-userTweets').show();
        }, 1000);
        $('#Ajax-Rsearch').animate({opacity: 1}, 1000);

        $.getJSON('app/tweets/V_userTweets.php', function (data) {
            console.log(data);
            for (var i = 0; i < data.tweets.length; i++) {
                content +=
                    '<img class="avatar-tweet" src="public/css/images/users/'+ data.tweets[i].avatar +'.png"/>' +
                    '<h4>' + data.tweets[i].content + '</h4>' +
                    '<p>' + data.tweets[i].tweet_date + '</p>' +
                    '<span class="content">' + data.tweets[i].content + '</span>' +
                    '<span class="glyphicon glyphicon-share-alt share-alt"></span>' +
                    '<hr/>';
            }

            for (var i = 0; i < data.retweets.length; i++) {
                content +=
                    '<h3>' + data.retweets[i].tweeterLogin + ' a retweeté ' + data.retweets[i].login + '</h3>' +
                    '<img class="avatar-tweet" src="public/css/images/users/'+ data.retweets[i].avatar +'.png"/>' +
                    '<h4>' + data.retweets[i].content + '</h4>' +
                    '<span class="content">Le ' + data.retweets[i].tweet_date + '</span>' +
                    '<span class="glyphicon glyphicon-share-alt share-alt"></span>' +
                    '<hr/>';
            }

            content += '<button type="button" class="btn btn-info" id="timeline-button">Timeline</button>';
            $('#Ajax-userTweets').html(content);

            $('#timeline-button').on('click', function (e) {
                e.preventDefault();

                $('#Ajax-Rsearch').animate({opacity: 0}, 1000);
                setTimeout(function () {
                    $('#Ajax-userTweets').hide();
                    $('#Ajax-TimeLine').show();
                }, 1000);
                $('#Ajax-Rsearch').animate({opacity: 1}, 1000);
            })
        });
    });
});