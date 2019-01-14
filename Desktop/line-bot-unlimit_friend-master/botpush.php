<?php



require "vendor/autoload.php";

$access_token = '+F9s6MU2rokX8HMa1nJ10E+lXnZsC8rNDhq3xZRkOXzOyXBbAvOslAV22xGLwBhR5qROBNfHUHazBNGWmPPS3WNymwihm+pW6F8fp+t2fk9HcoENwDYMN8foPadym3w2MYWsh3eUWZ+8bISJmcYfOAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '061306855494354aa89f799f1d047228';
// ID ที่ต้องการส่งไปหา
$pushID = 'U8585d706b27b3d8ba212583c8a0e5432';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ทำได้แล้วววววว');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







