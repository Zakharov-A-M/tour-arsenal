<?php
ini_set('error_reporting', TRUE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once '../telegram/TelegramBot.php';
include_once '../mail/mail.php';
include_once '../bd/connect.php';
const ID_CHAT = -268580829;
$data = [];

if ($_FILES) {
    $data['file'] = $_FILES['file_v']['tmp_name'];
    $data['file_name'] = $_FILES['file_v']['name'];
}

if ($_POST) {

    $telegramBot = new TelegramBot();

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
            $query = Connect::QueryInsert("INSERT INTO order_call (name, phone) values('".$data['name']."', '".$data['phone']."')");
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
                                <div class="title">Заявка принята</div>
                                <p>Спасибо! Ваше сообщение отправлено!</p>
                            </div>
                        </div>

                        <div class="form-footer" style="text-align: center;">
                            <button class="btn-lg jqmClose btn btn-default bottom-close">Закрыть</button>			</div>
                    </div>
                </div>
            </div>

            <?php
    }

        if ((int)$data['id'] == 3) {
            ?>

            <div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 86px;">
                <span class="jqmClose top-close fa fa-close"></span>
                <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
                    <div class="form popup success">
                        <div class="form-header">
                            <i class="fa fa-check"></i>
                            <div class="text">
                                <div class="title">Заявка принята</div>
                                <p>Спасибо! Ваше сообщение отправлено!</p>
                            </div>
                        </div>

                        <div class="form-footer" style="text-align: center;">
                            <button class="btn-lg jqmClose btn btn-default bottom-close">Закрыть</button>			</div>
                    </div>
                </div>
            </div>

            <?php
        }

        if ((int)$data['id'] == 4) {
            ?>

            <div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 86px;">
                <span class="jqmClose top-close fa fa-close"></span>
                <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
                    <div class="form popup success">
                        <div class="form-header">
                            <i class="fa fa-check"></i>
                            <div class="text">
                                <div class="title">Заявка принята</div>
                                <p>Спасибо! Ваше сообщение отправлено!</p>
                            </div>
                        </div>

                        <div class="form-footer" style="text-align: center;">
                            <button class="btn-lg jqmClose btn btn-default bottom-close">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }

        $message .= 'Action: ' . $data['action']."\n";
        foreach ($data as $key => $item) {
            if ($key != 'id' && $key != 'action' && $key != 'file' && $key != 'file_name') {
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

