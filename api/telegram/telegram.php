<?php

include('TelegramBot.php');
const ID_CHAT = 429075266;

$telegramBot = new TelegramBot();

$updates = $telegramBot->getUpdates();

/*foreach ($updates->result as $update) {
    $telegramBot->sendMessage($update->message->chat->id, 'Hi!!!');
}*/

var_dump($updates);
$message = 'Hi!';
$sendmess = $telegramBot->sendMessage(ID_CHAT, $message);