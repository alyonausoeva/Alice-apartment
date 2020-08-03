<html>
<head>
<link href="style.css" rel="stylesheet"  type="text/css" />
<link rel="icon" href="logo.png" type="image/x-icon"/> 
<title>Alice mini-studious</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php 
require 'class_phpmailer.php'; 
require 'class_smtp.php'; 



$email = $_POST['email']; 
 

$mail = new PHPMailer; 

$mail->isSMTP(); 
$mail->Host = 'smtp.yandex.ru'; 
$mail->SMTPAuth = true; 
$mail->Username = 'alyonausus'; 
$mail->Password = '1234567890QQQ'; 
$mail->SMTPSecure = 'ssl'; 
$mail->Port = 465; 
$mail->CharSet="ANSI"; 
$mail->setFrom('alyonausus@yandex.ru'); 
$mail->addAddress('alyonausus@yandex.ru'); 

$out_text = "Email: ".$email; 
$mail->isHTML(true); 
$mail->Subject = "Новая заявка на рассылку новостей апартаментов Alice mini-studious!"; 
$mail->Body = "$out_text"; 
if(!$mail->send()) { 
echo '<h1 style="text-align: center; margin-top: 20px;">К сожалению, ваще сообщение не было отправлено, попробуйте еще раз</h1>'; 
echo 'Ошибка: ' . $mail->ErrorInfo; 
} 
else { 
echo '<h1 style="text-align: center; margin-top: 20px; color:#f2da70;">Спасибо за подписку на нашу рассылку</h1><center><img style="width:400px;" src="logo.png"></center><a style="color:#f2da70;" href="index.html">Назад к сайту</a></center>'; 
} 

?>
</body>
</html>