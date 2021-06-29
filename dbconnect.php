<?php
$message = "Подключение прошло успешно.";
$dbcon = new mysqli("localhost","root","root","protype");
if ($mysqli -> connect_errno) {
printf("He удалось подключиться: ", $mysqli -> connect_error); exit();
}
?>