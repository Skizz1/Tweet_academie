$(document).ready(function () {

        console.log(id = $('.Ajax-userTweetsProfile').data("id"));
        $.post("../tweets/V_userTweetsProfile.php",{id:id},function(data){
            console.log(data);
            content = '';
            for (var i = 0; i < data.tweets.length; i++) {
                content +=
                    '<img class="avatar-tweet" src="../../public/css/images/users/' + data.tweets[i].avatar + '.png"/>' +
                    '<h4>' + data.tweets[i].login + '</h4>' +
                    '<p>' + data.tweets[i].content + '</p>' +
                    '<p class="content">Tweeté le : ' + data.tweets[i].tweet_date + '</p>' +
                    '<span class="glyphicon glyphicon-share-alt share-alt"></span>' +
                    '<hr/>';
            }

            for (var i = 0; i < data.retweets.length; i++) {
                content +=
                    '<h3>' + data.retweets[i].tweeterLogin + ' a retweeté ' + data.retweets[i].login + '</h3>' +
                    '<img class="avatar-tweet" src="../../public/css/images/users/' + data.retweets[i].avatar + '.png"/>' +
                    '<h4>' + data.retweets[i].login + '</h4>' +
                    '<p>' + data.retweets[i].content + '</p>' +
                    '<p class="content">Tweeté le : ' + data.retweets[i].tweet_date + '</p>' +
                    '<span class="glyphicon glyphicon-share-alt share-alt"></span>' +
                    '<hr/>';
            }

            $('.Ajax-userTweetsProfile').html(content);
        });
});

$.getJSON('../tweets/V_userTweetsProfile.php', function (data) {
    console.log(data);

});
