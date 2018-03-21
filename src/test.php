<?php
require_once('C:\Users\shadow\Desktop\Junior Semester Classes\Semester 2\Web Apps\Twitter Project\cinf301-spr18-project-04\vendor\j7mbo\twitter-api-php\TwitterAPIExchange.php');
require_once('C:\Users\shadow\Desktop\Junior Semester Classes\Semester 2\Web Apps\Twitter Project\cinf301-spr18-project-04\config.inc.template.php');

// Path to Files from DR. Plantes code
//require_once('../vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php');
//require_once('../config.inc.php');
/**
 *
 * Documentation on use:
 *
 * Check out:  https://github.com/J7mbo/twitter-api-php/wiki/Twitter-API-PHP-Wiki
 *
 */
//$a = ;
//$b;
//$c;
//$d;
$settings = array(
    'oauth_access_token' =>"976221509751640066-n76B9wHyYVCuiZCNQnlC2hn9ofIEXfr",
    'oauth_access_token_secret' => "yyNH1KaV44DC4w7LANSMYWdfyPIIaTrDmBlO3kYmQOigb",
    'consumer_key' => "cfXmtK0CnFrWz7lLYzGdKaftg",
    'consumer_secret' => "zhskiXzMIvNxim6vhKrJWcUyFbgOKP5l37pYkOtKyJgryQpFXA"
);

/*
 * Get User's Tweets
 */
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=j7mbo';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

$decoded = json_decode($response);
var_dump($decoded);

exit(0);

/*
 * Get followers
 */
$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=J7mbo';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

?>
