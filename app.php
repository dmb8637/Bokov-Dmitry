<?php 

$comment = trim($_POST['comment'])
$dt = date('Y-m-d H:i:s');

if ($comment == '') {
 echo "Заполните все поля";
}
else {
 file_put_contents('apps.txt', '$dt $comment \n', FILE_APPEND);
 echo '1';
}
