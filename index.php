<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include('header.php');
include('app/tweets/M_tweets.php');

$test = new TweetsModel();
$test->remove(3);

?>
    <div class="container">
        <h1>Yolo</h1>
    </div>
<?php include('footer.php'); ?>