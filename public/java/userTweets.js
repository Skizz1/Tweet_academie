$(document).ready(function () {

    $(document).on('click', '#Ajax-tweetCount', function (e) {
        e.preventDefault();
        content = "";

        $('#Ajax-TimeLine').hide();
        if($('#Ajax-userTweets').length === 0){
            $('#Ajax-Rsearch').append('<div class="tweet" id="Ajax-userTweets"></div>');
        }
        $('#Ajax-userTweets').show();

        $.getJSON('app/tweets/V_userTweets.php', function (data) {
            console.log(data);
            for (var i = 0; i < data.tweets.length; i++) {
                content +=
                    '<img class="avatar-tweet" src="public/css/images/users/' + data.tweets[i].avatar + '.png"/>' +
                    '<h4><a href="app/profile/V_profile.php?id=' + data.tweets[i].id + '">' + data.tweets[i].login + '</a></h4>' +
                    '<p>' + data.tweets[i].content + '</p>' +
                    '<p class="content">Tweeté le :' + data.tweets[i].tweet_date + '</p>' +
                    '<span class="glyphicon glyphicon-share-alt share-alt"></span>' +
                    '<hr/>';
            }

            for (var i = 0; i < data.retweets.length; i++) {
                content +=
                    '<h3><a href="app/profile/V_profile.php?id=' + data.retweets[i].tweeterID + '">' +
                    data.retweets[i].tweeterLogin + '</a>' +
                    ' a retweeté <a href="app/profile/V_profile.php?id=' + data.retweets[i].id + '">' +
                    '' + data.retweets[i].login + '</a></h3>' +
                    '<img class="avatar-tweet" src="public/css/images/users/' + data.retweets[i].avatar + '.png"/>' +
                    '<h4><a href="app/profile/V_profile.php?id=' + data.retweets[i].id + '">' + data.retweets[i].login + '</a></h4>' +
                    '<p>' + data.retweets[i].content + '</p>' +
                    '<p class="content">Tweeté le : ' + data.retweets[i].tweet_date + '</p>' +
                    '<span class="glyphicon glyphicon-share-alt share-alt"></span>' +
                    '<hr/>';
            }

            content += '<button type="button" class="btn btn-info" id="timeline-button">Timeline</button>';
            $('#Ajax-userTweets').html(content);

            $('#timeline-button').on('click', function (e) {
                e.preventDefault();

                $('#Ajax-userTweets').hide();
                $('#Ajax-TimeLine').show();
            })
        });
    });
});