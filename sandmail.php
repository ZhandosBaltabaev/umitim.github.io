<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "yoursexytrap@gmail.com";
  $subject = "Обратная связь от $name";
  $body = "Имя: $name\n\nEmail: $email\n\nСообщение:\n$message";

  // Опциональные заголовки для форматирования письма
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "Сообщение успешно отправлено.";
  } else {
    echo "Ошибка при отправке сообщения.";
  }
}
?>