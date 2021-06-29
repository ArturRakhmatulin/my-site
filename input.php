<?php
session_start();
?>
<?php
require_once("dbconnect.php");
$pole = $_GET['firstname'];
$pole2 = $_GET['telephone'];
$pole3 = $_GET['mail'];
$pole4 = $_GET['course'];
$_SESSION['firstname'] = $pole; 
if (! empty($_GET['firstname'])) {
$mysql = "INSERT INTO  listeners(name, televon, mail, course) VALUES('".$pole."', '".$pole2."','".$pole3."', '".$pole4."');";
$result = $dbcon->query($mysql); }
else {die ("Ошибка: Вы ничего не ввели");}
if (!$result) {
echo 'Ошибка выполнения запроса:'.$dbcon->error;
}

header("Location: listener.php");
?>