<?php
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$fio = htmlspecialchars($fio);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);

$fio = urldecode($fio);
$phone = urldecode($phone);
$email = urldecode($email);

$fio = trim($fio);
$phone = trim($phone);
$email = trim($email);

if (mail("hserge@rumbler.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>