<?php
   $to = 'test@mail.ru'; 
   $subject = 'Отправка формы';
   $message = "Ваше имя: ".$_POST['name']."\nНомер телефона: ".$_POST['tel'];
   mail($to, $subject, $message);
?>