<?php
$access_token = '1Pr9sDiFNucb9qRLT8/kPEi7zQyrXx33PBu4kesCY+cH4qVheXZD3s/+kFJwKpnVa4eB4y+uAgUvia6zjurHHaq2Zcsq5hYzzBbKL+L5veheIpfb0lmFPpRRtjcAZ15GUDP8qFWD9P4sBtAPNtmx1QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;