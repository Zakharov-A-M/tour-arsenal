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
        $mail->Subject = $data['action'];
        $mail->Body = " <h3> {$data['action']}</h3><br><br>";
        foreach ($data as $key => $item) {
            if ($key != 'action' && $key != 'id' && $key != 'file' && $key != 'file_name') {
                $mail->Body .= '<span>' .ucfirst($key). ': '. $item .'</span><br>';
            }
        }

        if (isset($data['file'])) {
            $mail->addAttachment($data['file'], $data['file_name']);
        }

        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            return true;
        }
    }
}