<?php

// https://temp-mail.org/ru/
// https://meetanshi.com/blog/send-mail-from-localhost-xampp-using-gmail/
// https://www.gmass.co/smtp-test

$to      = 'vajado8400@aramask.com';
$subject = 'Test message';
$message = 'Тест временной почты';
$headers = 'From: matroskin978@ukr.net' . "\r\n" .
    'Reply-To: matroskin978@ukr.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

var_dump(mail($to, $subject, $message, $headers));
