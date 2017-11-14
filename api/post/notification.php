<?php
ini_set('error_reporting', TRUE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once '../telegram/TelegramBot.php';
include_once '../mail/mail.php';
include_once '../bd/connect.php';
const ID_CHAT = -268580829;

$send_message = ['ru' => 'Сообщение отправлено', 'eu' => 'Message sent', 'fi' => 'Viesti lähetettiin', 'cn' => '消息發送'];
$meneg_call = ['ru' => 'Наш менеджер перезвонит вам в ближайшее время.', 'eu' => 'Our manager will call you back soon.', 'fi' => 'Johtajamme soittaa sinut takaisin pian.', 'cn' => '我們的經理很快就會打電話給你'];
$funkyou =['ru' => 'Спасибо за ваше обращение!', 'eu' => 'Thank you for your treatment!', 'fi' => 'Kiitos hoitostasi!', 'cn' => '謝謝你的處理！'];
$close = ['ru' => 'Закрыть', 'eu' => 'Close', 'fi' => 'lähellä', 'cn' => '關閉'];
$app_accept = ['ru' => 'Заявка принята', 'eu' => 'Application accepted', 'fi' => 'Sovellus hyväksytään', 'cn' => '申請已接受'];
$funk_mess_post = ['ru' => 'Спасибо! Ваше сообщение отправлено!', 'eu' => 'Thank you! Your message has been sent!', 'fi' => 'Kiitos! Viestisi on lähetetty!', 'cn' => '謝謝！ 您的留言已發送！'];




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
                            <div class="title"><?= $send_message[$_COOKIE["country"]] ?></div>
                            <p><?= $meneg_call[$_COOKIE["country"]] ?></p><p><?= $funkyou[$_COOKIE["country"]] ?></p>			</div>
                    </div>

                    <div class="form-footer" style="text-align: center;">
                        <button class="btn-lg jqmClose btn btn-default bottom-close"><?= $close[$_COOKIE["country"]] ?></button>			</div>
                </div>
            </div>
        </div>

   <?php
    }
        if ((int)$data['id'] == 2) {
            $query = Connect::QueryInsert("INSERT INTO order_question (name, email, phone, service, question) values('".$data['name']."', '".$data['email']."', '".$data['phone']."', '".$data['service']."', '".$data['message']."')");
            ?>

            <div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 86px;">
                <span class="jqmClose top-close fa fa-close"></span>
                <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
                    <div class="form popup success">
                        <div class="form-header">
                            <i class="fa fa-check"></i>
                            <div class="text">
                                <div class="title"><?= $app_accept[$_COOKIE["country"]] ?></div>
                                <p><?= $funk_mess_post[$_COOKIE["country"]] ?></p>
                            </div>
                        </div>

                        <div class="form-footer" style="text-align: center;">
                            <button class="btn-lg jqmClose btn btn-default bottom-close"><?= $close[$_COOKIE["country"]] ?></button>			</div>
                    </div>
                </div>
            </div>

            <?php
    }

        if ((int)$data['id'] == 3) {
            $query = Connect::QueryInsert("INSERT INTO order_services (name, email, phone, service, question) values('".$data['name']."', '".$data['email']."', '".$data['phone']."', '".$data['service']."', '".$data['message']."')");
            ?>

            <div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 86px;">
                <span class="jqmClose top-close fa fa-close"></span>
                <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
                    <div class="form popup success">
                        <div class="form-header">
                            <i class="fa fa-check"></i>
                            <div class="text">
                                <div class="title"><?= $app_accept[$_COOKIE["country"]] ?></div>
                                <p><?= $funk_mess_post[$_COOKIE["country"]] ?></p>
                            </div>
                        </div>

                        <div class="form-footer" style="text-align: center;">
                            <button class="btn-lg jqmClose btn btn-default bottom-close"><?= $close[$_COOKIE["country"]] ?></button>			</div>
                    </div>
                </div>
            </div>

            <?php
        }

        if ((int)$data['id'] == 4) {
            $query = Connect::QueryInsert("INSERT INTO review_client (name, email, review, status) values('".$data['name']."', '".$data['email']."', '".$data['message']."', 0)");
            ?>

            <div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 86px;">
                <span class="jqmClose top-close fa fa-close"></span>
                <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
                    <div class="form popup success">
                        <div class="form-header">
                            <i class="fa fa-check"></i>
                            <div class="text">
                                <div class="title"><?= $app_accept[$_COOKIE["country"]] ?></div>
                                <p><?= $funk_mess_post[$_COOKIE["country"]] ?></p>
                            </div>
                        </div>

                        <div class="form-footer" style="text-align: center;">
                            <button class="btn-lg jqmClose btn btn-default bottom-close"><?= $close[$_COOKIE["country"]] ?></button>
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

