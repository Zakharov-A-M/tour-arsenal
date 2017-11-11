<?php

include_once '../lib/phpmailer/class.phpmailer.php';
include_once '../lib/phpmailer/class.smtp.php';

class Mail
{
    public function sendMail($data)
    {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.yandex.ru';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->CharSet = 'UTF-8';

        $mail->Username = 'zakharov19951@yandex.by';
        $mail->Password = 'morgan19951';

        $mail->setFrom('zakharov19951@yandex.by');
        $mail->addAddress('morgan.zaharov@yandex.ru');
        $mail->isHTML(true);
        $mail->Subject = 'Бронирование домика';
        $mail->Body = "<span>Name: {$data['name']}</span><br>
                        <span>E-mail: {$data['email']}</span><br>
                        <span>Phone: {$data['tel']}</span><br>
                        <span>House: {$data['select']}</span><br>
                        <span>Message: {$data['message']}</span><br>";

        if (!$mail->send()) {
            error_log('Mailer Error: ' . $mail->ErrorInfo);
        } else {
            return true;
        }
    }
}