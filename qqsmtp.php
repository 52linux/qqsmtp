<?php
$reciver_email = "123456@qq.com";
$cfg_my_email = "123456@qq.com";
$cfg_my_email_shouquanma="--------";



function send_to_me($to_email,$subject,$content){
	global $cfg_my_email;
	global $cfg_my_email_shouquanma;
	date_default_timezone_set('Asia/Shanghai');
	require_once dirname(__FILE__).'/PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->IsHTML(0);
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = "smtp.qq.com";
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->Username = $cfg_my_email;
	$mail->Password = $cfg_my_email_shouquanma;
	$mail->setFrom($cfg_my_email);
	$mail->addReplyTo($cfg_my_email);
	$mail->addAddress($to_email);
	$mail->Subject = $subject;
	$mail->msgHTML($content);
	$mail->send();
}


// send_to_me($reciver_email,$subject,$mail_content)