<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];

// Формирование самого письма
if(isset($_POST['template']) && $_POST['template']=='template_1'){ 
  $title = "Подписка в Best Tour Plan";

  $body = "<h2>Новое обращение</h2>
     <b>Почта:</b> $email<br>
  ";
} else if(isset($_POST['template']) && $_POST['template']=='template_2'){ 
  $title = "Новое бронирование Best Tour Plan";

  $body = "<h2>Бронирование</h2>
     <b>Имя:</b> $name<br>
     <b>Почта:</b> $email<br>
     <b>Телефон:</b> $phone<br><br>
     <b>Сообщение:</b><br>$message
  "; 
}else{ 
  $title = "Новое обращение Best Tour Plan";

  $body = "<h2>Новое обращение</h2>
     <b>Имя:</b> $name<br>
     <b>Телефон:</b> $phone<br><br>
     <b>Сообщение:</b><br>$message
  ";
}

// if((!isset($_POST['name']) || !trim($_POST['name'])) &&
// (!isset($_POST['phone']) || !trim($_POST['phone'])) &&
// (!isset($_POST['message']) || !trim($_POST['message']))){
//   $title = "Подписка в Best Tour Plan";

//   $body = "<h2>Новое обращение</h2>
//      <b>Почта:</b> $email<br>
//   ";
// }else if((!isset($_POST['email']) || !trim($_POST['email'])) {
//   $title = "Новое обращение Best Tour Plan";

//   $body = "<h2>Новое обращение</h2>
//      <b>Имя:</b> $name<br>
//      <b>Телефон:</b> $phone<br><br>
//      <b>Сообщение:</b><br>$message
//   ";
// }



/*$title = "Новое обращение Best Tour Plan";

$body = "
<h2>Новое обращение</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
"*/

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'kiara575@mail.ru'; // Логин на почте
    $mail->Password   = '99255'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('kiara575@mail.ru', 'Светлана *'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('kiara575@mail.ru');  


    // Прикрипление файлов к письму
// if (!empty($file['name'][0])) {
//     for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
//         $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
//         $filename = $file['name'][$ct];
//         if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
//             $mail->addAttachment($uploadfile, $filename);
//             $rfile[] = "Файл $filename прикреплён";
//         } else {
//             $rfile[] = "Не удалось прикрепить файл $filename";
//         }
//     }   
// }
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата

if(isset($_POST['template']) && $_POST['template']=='template_1'){ 
  header('Location: thank2.php');
} else if(isset($_POST['template']) && $_POST['template']=='template_2'){ 
  header('Location: book.php'); 
}else{ 
  header('Location: thank.php');
}

// if((!isset($_POST['name']) || !trim($_POST['name'])) &&
// (!isset($_POST['phone']) || !trim($_POST['phone'])) &&
// (!isset($_POST['message']) || !trim($_POST['message']))){
//   header('Location: thank2.php');
// }else{
//   header('Location: thank.php');
// }
