<?php

//We use already made Twitter OAuth library
//https://github.com/mynetx/codebird-php
require_once ('codebird.php');

//Twitter OAuth Settings, enter your settings here:
$CONSUMER_KEY = 'wSY7KwDIuLBbxV9mpypPQ';
$CONSUMER_SECRET = 'jcKQKpJdEJLJkffctooEAZ91kVg9DV9hZNjeak7Xyk';
$ACCESS_TOKEN = '761200760-tEYDwshEAWxDWrgfzBG7JIZqFI9xPphdenxYs5KF';
$ACCESS_TOKEN_SECRET = 'XHay9JEkQn6A2PeOmEdx0vdRt3rWf2MpH9NMFGVYSvLz5';

//Get authenticated
Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);
$cb = Codebird::getInstance();
$cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);


//retrieve posts
$q = $_POST['q'];
$count = $_POST['count'];
$api = $_POST['api'];

//https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
//https://dev.twitter.com/docs/api/1.1/get/search/tweets
$params = array(
	'screen_name' => $q,
	'q' => $q,
	'count' => $count
);

//Make the REST call
$data = (array) $cb->$api($params);

//Output result in JSON, getting it ready for jQuery to process
echo json_encode($data);

?>