<?php
$access_token = 'l1keTDC8SiLOO+2v9SAfbiN4JgCVheGEGrUGzGk8AWuRBTwtvhIBxnav6hGjsIOIEwCXDbkLnSwY7EHIle4UpJrXcZa5cFOu9usTFXPDJM3s9V0lrOZhTuAktF3KWAqD5eX3ykiorRWMN4KYnkj+fQdB04t89/1O/w1cDnyilFU=';
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:W8B1EissNtwSwyk';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
