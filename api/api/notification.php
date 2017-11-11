<?php
include_once 'mail.php';
include_once 'telegram/TelegramBot.php';

const ID_CHAT = -200803791;
$select = $_POST['select'];
switch ((int)$select) {
    case 1:
        $data['select'] = "VIP";
        break;
    case 2:
        $data['select'] = "Стандарт";
        break;
    case 3:
        $data['select'] = "Беседка";
        break;
}


$data['name'] = $_POST['name'];
$data['tel'] = $_POST['tel'];
$data['email'] = $_POST['email'];
$data['message'] = $_POST['message'];
/*var_dump($data);*/
$mail = new Mail();
if ($mail->sendMail($data)) {
    $telegramBot = new TelegramBot();
    $message =  "          Name: {$data['name']}
                E-mail: {$data['email']}
                Phone: {$data['tel']}
                House: {$data['select']}
                Message: {$data['message']}";
    $sendmess = $telegramBot->sendMessage(ID_CHAT, $message);
    return true;
}


/*$updates = $telegramBot->getUpdates();*/

/*foreach ($updates->result as $update) {
    $telegramBot->sendMessage($update->message->chat->id, 'Hi!!!');
}*/

$message = 'Hi!';
$sendmess = $telegramBot->sendMessage(ID_CHAT, $message);
