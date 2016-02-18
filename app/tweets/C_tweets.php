<?php
require_once('M_tweets.php');
require_once('M_retweet.php');

class TweetsController
{
    function createTweet($content)
    {
        $date        = date('Y-m-d');
        $TweetsModel = new TweetsModel;
        $TweetsModel->create(["content" => $content, "user_id" => $_SESSION["id"], "tweet_date" => $date]);
    }

    public function retweet($userId, $tweetId)
    {
        $date          = date('Y-m-d');
        $reTweetsModel = new reTweetsModel;
        $TweetsModel   = new TweetsModel;

        $reTweetsModel->create([
            "userId" => $userId,
            "tweet_id" => $TweetsModel->getField($tweetId, 'id'),
            "content" => $TweetsModel->getField($tweetId, 'content'),
            "date_retweet" => $date
        ]);
    }
}

echo "message envoye";
$TweetsController = new TweetsController;
$TweetsController->createTweet($_POST["content"]);