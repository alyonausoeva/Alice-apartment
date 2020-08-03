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



$fio = $_POST['fio'];
$tel = $_POST['tel'];
$data = $_POST['data'];
$mes = $_POST['mes']; 
 

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

$out_text = "ФИО:".$fio."  Телефон:".$tel."  Даты:".$data."  Сообщение:".$mes;
  
$mail->isHTML(true); 
$mail->Subject = "Новая заявка на бронирование апартаментов№2!"; 
$mail->Body = "$out_text"; 
if(!$mail->send()) { 
echo '<h1 style="text-align: center; margin-top: 20px;">К сожалению, ваще сообщение не было отправлено, попробуйте еще раз</h1>'; 
echo 'Ошибка: ' . $mail->ErrorInfo; 
} 
else { 
echo '<h1 style="text-align: center; margin-top: 20px; color:#f2da70;">Спасибо! Ваша заявка на бронирование отправлена! Мы свяжемся с вами в ближайшее время.</h1><center><img style="width:400px;" src="logo.png"></center><center><a style="color:#f2da70;" href="index.html">Назад к сайту</a></center>'; 
} 

?>
</body>
</html>