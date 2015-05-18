<?php
require 'TwistOAuth.php';
set_time_limit(0);
    try {

// Twitter for iPhone
$to = new TwistOAuth('IQKbtAYlXLripLGPWd0HUA', 'GgDYlkSvaPxGxC4X8liwpUoqKwwr3lCADbz8A7ADU', 'AT', 'AS');

	while(true){
// 一分おきに乱数をツイート
$to->post('statuses/update', array('status' => '@null '.rand(9999999999,9999999999999)));
sleep (60);
             }
    } catch (TwistException $e) {

    }
