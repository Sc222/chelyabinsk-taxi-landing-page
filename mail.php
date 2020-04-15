<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['UserName'];
$surname = $_POST['UserSurname'];
$phone = $_POST['PhoneNumber'];

$mail->isSMTP();                
$mail->Host = 'smtp.mail.ru';  													
$mail->SMTPAuth = true;
$mail->Username = 'taxi-chelyabinsk74@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '.i2pa3ucPOYV'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('taxi-chelyabinsk74@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('igorek.chelovek@gmail.com');     // Кому будет уходить письмо
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка на звонок с сайта аренды автомобилей';
$mail->Body    = '' .$name . ' ' .$surname.' оставил заявку, его телефон ' .$phone;
$mail->AltBody = '';

if(!$mail->send()) {
    header('location: error.html');
    //echo 'Error';
}
else {
    header('location: success.html');
}
?>
