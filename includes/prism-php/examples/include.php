<?php
//鍒濆?鍖
require_once('../lib/client.php');

$url = 'http://127.0.0.1:8080/api';
$key = '';
$secret = '';

$c = new prism_client($url, $key, $secret);

//瀹炴椂鎵撳嵃log
$c->set_logger(function($message){
    echo $message;
    flush();
});
