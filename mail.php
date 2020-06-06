<?php
	$method = $_SERVER['REQUEST_METHOD'];
      
  $mail_to = 'andreypbiz@gmail.com';     

 if($_POST){

  $userName   = $_POST['userName'];
  $userPhone  = $_POST['userPhone'];
  $message  = "Имя пользователя: " . $userName . "<br/>";  
  $message .= "Телефон пользователя: " . $userPhone . "<br/>";

  $subject = "Получить Курс";   
 }
 

  $headers= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n"; 
  $headers .= "From:" . $userPhone . "<no-reply@test.com>\r\n"; 
  
 
  $mail = mail($mail_to, $subject, $message, $headers);
  
  if($mail){
    echo 'Cообщение Передано!';
  }else 'Ошибка'

  ?>