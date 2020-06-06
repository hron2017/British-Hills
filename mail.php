<?php
	$method = $_SERVER['REQUEST_METHOD'];
     
  
  $mail_to = 'andreypbiz@gmail.com';     

 
 if(!$_POST['userName']){
  $userEmail  = $_POST['userEmail'];
  
  $message .= "Адрес пользователя: " . $userEmail . "<br/>";
  $subject = "Получение Урока";   
  
 } else {
  $userName   = $_POST['userName'];
  $userEmail  = $_POST['userEmail'];
  $userPhone  = $_POST['userPhone'];
  $userComent  = $_POST['userComent'];
 
  $message  = "Имя пользователя: " . $userName . "<br/>";  
  $message .= "Телефон пользователя: " . $userPhone . "<br/>";
  $message .= "Email пользователя: " . $userEmail . "<br/>";
  $message .= "Комментарий пользователя: " . $userComent . "<br/>";

  $subject = "Получить Курс";   
 }
 

  $headers= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
  $headers .= "From:" . $userPhone . "<no-reply@test.com>\r\n"; // от кого письмо
  
  // отправляем письмо 
  $mail = mail($mail_to, $subject, $message, $headers);
  
  if($mail){
    echo 'Cообщение Передано!';
  }else 'Ошибка'

  ?>