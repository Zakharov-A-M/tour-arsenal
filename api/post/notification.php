<?php
ini_set('error_reporting', TRUE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once '../telegram/TelegramBot.php';
include_once '../mail/mail.php';
const ID_CHAT = -268580829;


if ($_POST) {
    $telegramBot = new TelegramBot();
    $data = [];
    $data = array_merge($_POST, $data);
    switch ((int)$data['id']) {
        case 1:
            $data['action'] = "Заказали звонок";
            break;
        case 2:
            $data['action'] = "Задали вопрос";
            break;
        case 3:
            $data['action'] = "Заказали услугу";
            break;
        case 4:
            $data['action'] = "Оставили отзыв";
            break;
    }



    $mail = new Mail();
    if ($mail->sendMail($data)) {
        if ((int)$data['id'] == 1) {
    ?>

        <div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 86px;">
            <span class="jqmClose top-close fa fa-close"></span>
            <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
                <div class="form popup success">
                    <div class="form-header">
                        <i class="fa fa-check"></i>
                        <div class="text">
                            <div class="title">Сообщение отправлено</div>
                            <p>Наш менеджер перезвонит вам в ближайшее время.</p><p>Спасибо за ваше обращение!</p>			</div>
                    </div>

                    <div class="form-footer" style="text-align: center;">
                        <button class="btn-lg jqmClose btn btn-default bottom-close">Закрыть</button>			</div>
                </div>
            </div>
        </div>

   <?php
    }
        if ((int)$data['id'] == 2) {
            ?>

            <div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 86px;">
                <span class="jqmClose top-close fa fa-close"></span>
                <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
                    <div class="form popup success">
                        <div class="form-header">
                            <i class="fa fa-check"></i>
                            <div class="text">
                                <div class="title">Сообщение отправлено</div>
                                <p>Наш менеджер перезвонит вам в ближайшее время.</p><p>Спасибо за ваше обращение!</p>			</div>
                        </div>

                        <div class="form-footer" style="text-align: center;">
                            <button class="btn-lg jqmClose btn btn-default bottom-close">Закрыть</button>			</div>
                    </div>
                </div>
            </div>

            <?php
        }

        $message .= 'Action: ' . $data['action']."\n";
        foreach ($data as $key => $item) {
            if ($key != 'id' && $key != 'action') {
                $message .= ucfirst($key) . ': ' . $item."\n";
            }
        }
        $sendmess = $telegramBot->sendMessage(ID_CHAT, $message);





    }



}


/*$telegramBot = new TelegramBot();
$message = 'Hi!';
$sendmess = $telegramBot->sendMessage(ID_CHAT, $message);*/

/*$telegramBot = new TelegramBot();
$updates = $telegramBot->getUpdates();
var_dump($updates);*/

