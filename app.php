<?php 

$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$name = trim($_POST['name']);
$comment = trim($_POST['comment'])
$dt = date('Y-m-d H:i:s');

if ($email == '' || $phone == '' || $name == '') {
 echo "Заполните все поля";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 echo "Введите корректный адрес эл. почты";
}
else {
 file_put_contents('apps.txt', '$dt $email $phone $name $comment \n', FILE_APPEND);
 echo '1';
}
