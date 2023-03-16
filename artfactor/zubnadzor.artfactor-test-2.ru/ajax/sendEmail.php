<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';

if ($_POST['isjs'] != 1) {
    die('post request only');
}


$msg = 'Поступила новая заявка' . PHP_EOL;
$msg .= 'Имя: ' . $_POST['username'] . PHP_EOL;
$msg .= 'Фамилия: ' . $_POST['secondname'] . PHP_EOL;
$msg .= 'Телефон: ' . $_POST['username'] . PHP_EOL;
$msg .= 'Email: ' . $_POST['username'] . PHP_EOL;
$msg .= 'Тема обращения: ' . $_POST['username'] . PHP_EOL;
$msg .= 'Текст: ' . $_POST['username'] . PHP_EOL;
$msg .= 'Физическое лицо/юрлицо: ' . $_POST['username'] . PHP_EOL;



$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

$mail->setFrom('info@zubnadzor.ru', 'ligaprofessionalov');
//$mail->AddAddress('admin@artfactor.ru');
$mail->AddAddress('info@zubnadzor.ru');

$mail->Subject = "Сообщение c сайта zubnadzor.ru";
$mail->isHTML(true);
$mail->Body = $msg;

if ($mail->send()) {
    //print "<script>alert(\"Сообщение успешно отправлено!\");";
    echo 'Сообщение успешно отправлено';
} else {
    echo 'Ошибка: ' . $mail->LAST_ERROR;
}
