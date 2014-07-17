<?php
$to = '<a href="mailto:James.Bond@mail.com">James.Bond@mail.com</a>';
$subject = 'Секретный код';
$message = '007';
$headers = 'From: <a href="mailto:alexsandra.panina@gmail.com">yourmail@mail</a>' . "\r\n" .
	'Reply-To: <a href="mailto:alexsandra.panina@gmail.com">yourmail@mail</a>' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
	echo 'Сообщение отправлено.';
} else {
	die('Письмо не отправлено.');
}
