<?php

require_once('M_tweets.php');
require_once('M_retweet.php');
require_once('../profile/M_profile.php');

class ControllerTweet {
    public function reTweet($userId, $tweetId)
    {
        $date          = date('Y-m-d H:i:s');
        $reTweetsModel = new reTweetsModel;
        $TweetsModel   = new TweetsModel;

        $reTweetsModel->create([
            "user_Id" => $userId,
            "tweet_id" => $TweetsModel->getField($tweetId, 'id'),
            "content" => $TweetsModel->getField($tweetId, 'content'),
            "date_retweet" => $date
        ]);
    }

    public function showTweets($id)
    {
        $TweetModel = new TweetsModel();
        return $TweetModel->readTweet($id);
    }


}