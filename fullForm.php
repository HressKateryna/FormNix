<?php

require_once(dirname(__FILE__) . '/actions/cook.php');
require_once(dirname(__FILE__) . '/templates/tmpForm.php');
require_once(dirname(__FILE__) . '/actions/valid.php');
require_once(dirname(__FILE__) . '/actions/bd.php');

/*require_once('./phpmailer/PHPMailer.php');
require_once('./phpmailer/SMTP.php');
require_once('./phpmailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;*/


/*if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$mail = new PHPMailer(true);

    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;			
    
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = '2005test2005test@gmail.com'; // Логин на почте
    $mail->Password   = '2005test2005test2005'; // Пароль на почте
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->setFrom('test2005@gmail.com', 'Katya'); // Адрес самой почты и имя отправителя


    // Получатель письма
    $mail->addAddress('xsandercage2@gmail.com');  
 

	// Отправка сообщения
	$mail->isHTML(true);
	$mail->Subject = $_POST['mail'];
	$mail->Body = $text;    

	$mail->send();
    echo 'Письмо было успешно отправлено!';

}*/

?>