<?php
/****
解析http请求
*****/

require './vendor/autoload.php';
#require './src/Hello.php';
$hello = new Request\Http\Hello('worlddd ');

echo $hello->hello() . PHP_EOL;
