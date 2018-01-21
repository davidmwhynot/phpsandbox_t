<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$body = 'An email test!';

$mail->AddReplyTo('noreply@davidwhynot.me', 'David Whynot');
$mail->SetFrom('noreply@davidwhynot.me', 'David Whynot');
$mail->AddAddress('davidmwhynot@gmail.com', 'Test');
$mail->Subject = 'Test email';
$mail->MsgHTML( $body );
$mail->IsSMTP();
$mail->Host = 'davidwhynot.me';
$mail->Port = 25;
$mail->SMTPDebug = 2;

if($mail->Send()) {
	echo "Mailer success";
} else {
	echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
