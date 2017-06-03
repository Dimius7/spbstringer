<?php

$token = '347401499:AAEKv_oKjiK_jO49QeOyOF_MVOFKXz1mTrc';

$chatId = 279663888;
$text = 'Привет! Я бот Стрингеров Санкт-Петербурга, и я очень рад видеть тебя!';

$parameters = [
    'chat_id' => $chatId,
    'text'    => $text,
];

$url = 'https://api.telegram.org/bot' . $token . '/sendMessage?'
    . http_build_query($parameters);

file_get_contents($url);