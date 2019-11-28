<?php

/* https://api.telegram.org/bot602459202:AAHHTgdtp90qDSkiUCjcXW4PXIiRRrc8U-o/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$number = $_POST['user_number'];
$adress = $_POST['user_adress'];
$move_type = $_POST['move_type'];
$from_z = $_POST['from_z'];
$to_z = $_POST['to_z'];
$user_message = $_POST['user_message'];
$token = "602459202:AAHHTgdtp90qDSkiUCjcXW4PXIiRRrc8U-o";
$chat_id = "-379366857";
$arr = array(
  'User name: ' => $name,
  'Phone number: ' => $number,
  'Adress:' => $adress,
  'Move Type:' => $move_type,
  'From Zip:' => $from_z,
  'to Zip:' => $to_z,
  'User Message' => $user_message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>