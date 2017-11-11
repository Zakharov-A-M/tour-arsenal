<?php

include_once '../mail/mail.php';



if ($_POST) {

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

   <?php }
    }


    /*$updates = $telegramBot->getUpdates();*/

    /*foreach ($updates->result as $update) {
        $telegramBot->sendMessage($update->message->chat->id, 'Hi!!!');
    }*/

}

