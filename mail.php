<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

$mail->CharSet = 'UTF-8';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "maint.zakaz@gmail.com";
$mail->Password = "MMaint112233";
/*$mail->setFrom('sales@cvl.kz');
$mail->addAddress('sales@cvl.kz', 'Cvl Company');*/
$mail->setFrom('savezhanov.d@maint.kz');
$mail->addAddress('savezhanov.d@maint.kz', 'Cvl Company');
$mail->isHTML(true);

$mail->Subject = 'Заказ звонка на сайте Cvl.kz';
$mail->Body    = "
    <html>
			<head>
				<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
			</head>
			<body>
				Имя: ".$_POST['name']."<br/>
				Телефон: ".$_POST['phone']."
			</body>
	</html>";
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
    exit("Mailer Error: " . $mail->ErrorInfo);
}
?>
