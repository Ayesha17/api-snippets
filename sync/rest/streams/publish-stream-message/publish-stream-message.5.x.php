<?php
// NOTE: This example uses the next generation Twilio helper library - for more
// information on how to download and install this version, visit
// https://www.twilio.com/docs/libraries/php
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

// Your Account SID from www.twilio.com/console
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
// Your Auth Token from www.twilio.com/console
$token = "your_auth_token";

$client = new Client($sid, $token);

$data = array(
    'id' => "bob",
    'x' => 256,
    'y' => 42
);

$message = $client->sync
    ->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
    ->syncStreams("MyStream")
    ->streamMessages->create($data);

print_r($message->sid);
echo PHP_EOL;
