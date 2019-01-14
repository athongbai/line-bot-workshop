<?php
$access_token = '+F9s6MU2rokX8HMa1nJ10E+lXnZsC8rNDhq3xZRkOXzOyXBbAvOslAV22xGLwBhR5qROBNfHUHazBNGWmPPS3WNymwihm+pW6F8fp+t2fk9HcoENwDYMN8foPadym3w2MYWsh3eUWZ+8bISJmcYfOAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
