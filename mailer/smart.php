<?php 

$phone = $_POST['phone'];
$where = $_POST['where'];
$whence = $_POST['whence'];
$name = $_POST['name'];
$text = $_POST['text'];
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'btg.group@bk.ru';                 // Наш логин
$mail->Password = 'stradyvary555';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('btg.group@bk.ru', 'Good BTG');   // От кого письмо 
$mail->addAddress('metaxas.a@yandex.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Новая заявка с сайта Good-BTG';
$mail->Body    = '<div style="display: block">Пользователь сайта Good-cardboard оставил контактные данные </div>
<div style="display: block"> Имя: ' . $name . ' </div>
<div style="display: block"> Телефон: ' . $phone . ' </div>
<div style="display: block"> Сообщение со страницы услуги: ' . $text . ' </div>
<div style="display: block"> Откуда забрать груз: ' . $whence . ' </div>
<div style="display: block"> Куда доставить: ' . $where . ' </div>';
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    return true;
} else {
    return true;
}

?>