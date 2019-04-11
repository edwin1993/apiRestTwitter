<?php 
include("TwitterAPIExchange.php");
	echo("hello word");

	$settings = array(
    'oauth_access_token' => "2221424766-jTqLwRAnTBO8HlR6fwEWyFl2uXilvmznvUKCC8J",
    'oauth_access_token_secret' => "vZ0R5EyEPgDpuMeY7gBWPkmCu42bSlxpz0yXlJUFIF6lS",
    'consumer_key' => "QU1MQYeaTgVPSO3KKE8wpcn6A",
    'consumer_secret' => "hJrYypT7CLXkX8wwWcyHKNMIMbMDLB3QkqTw9AUpoyK3xYUCk2"
);

	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	$getfield = '?screen_name=AnieVelasquez__&count=1';
	$requestMethod = 'GET';

	$twitter = new TwitterAPIExchange($settings);
	echo $twitter->setGetfield($getfield)
	    ->buildOauth($url, $requestMethod)
	    ->performRequest();
 ?>
