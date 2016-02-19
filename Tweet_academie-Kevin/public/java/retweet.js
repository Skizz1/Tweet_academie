$(document).ready(function () {

    $(document).on('click', '.retweet', function (e) {
        e.preventDefault();

        tweetId = $(this).data('id');
        $.post('app/tweets/V_retweet.php', {tweetID: tweetId}, function (data) {
            console.log(data);
        });
    });
});