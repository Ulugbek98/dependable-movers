<?php

/* https://api.telegram.org/bot1058710114:AAFrk3XHRPy-Yd2CVIgkvE8iQewxfZsgkuo/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
$plas= "%2B";
$name = $_POST['name'];
$phone =$_POST['phone'];
$email = $_POST['email'];
$move_type = $_POST['move_type'];
$from_z = $_POST['from_z'];
$to_z = $_POST['to_z'];
$message = $_POST['message'];
$token = "1058710114:AAFrk3XHRPy-Yd2CVIgkvE8iQewxfZsgkuo";
$chat_id = "-381635827";
$arr = array(
  'Name: ' => $name,
  'Phone: ' => $plas.$phone,
  'Email: ' => $email,
  'Type of Move: ' => $move_type, 
  'From Zip: ' => $from_z,
  'To Zip: ' => $to_z,
  'Message: ' => $message,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
  header('Location: Thanks.html');
} else {
  echo "Error";
}
