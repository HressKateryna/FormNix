<?php

require_once(dirname(__FILE__) . '/templates/tmpForm.html');

require_once('./phpmailer/PHPMailer.php');
require_once('./phpmailer/SMTP.php');
require_once('./phpmailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$a = 0;
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$text = $_POST['message'];

	if(!$name){
		echo "Sorry, what is your name? <br>";
		$a++;
	}
	if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
		echo "Sorry, your email incorrectly. Try once more :( <br>";
		$a++;
	}
	if(!$text){
		echo "Sorry, what did you mean? <br>";
		$a++;
	}

	if($a != 3){
		echo "Data is filled in correctly! Congratulations! <br>";
	}else echo "Try once more :( <br>";


	$mail = new PHPMailer(true);

	    $mail->isSMTP();   
	    $mail->CharSet = "UTF-8";
	    $mail->SMTPAuth   = true;
	    $mail->SMTPDebug = 2;			
	    /*$mail->Debugoutput = function($str, $level) {
	    	$GLOBALS['status'][] = $str;
 			print_r($GLOBALS['status']);
		};*/
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



	try {
	} catch (Exception $e) {
	    $result = "error";
	    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
	}
 
	/*
	if(mail ('kateryna.hress@gmail.com', 'subject', $text)){
		echo "All is ok!";
	}else echo "Try more";
	*/
}

?>