<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);
  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "ENTER MAIL";
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if (mail($receiver, $subject, $body, $sender)) {
         echo "Ваше сообщение было отправлено";
      }
      else {
         echo "Произошла ошибка при отправке сообщения!";
      }
    }
    else {
      echo "Введите правильный почтовый адрес!";
    }
  }
  else {
    echo "Поля Электронная почта и Сообщение обязательны!";
  }
?>
