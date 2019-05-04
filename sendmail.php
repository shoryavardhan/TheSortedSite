<?php

$mail = 'noreply@gogetthemes.com';
$name = $_POST['name'];
$user_mail = $_POST['email'];
$msg = $_POST['msg'];
$headers = 'From:'.$user_mail  . "\r\n" .
    'Reply-To: '.$user_mail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
if(mail($mail, 'WebContactForm', $msg, $headers)){
    echo 'Your message has been sent!';
}
else {
    echo 'Something goes wrong, message wasn\'t send!';
}

