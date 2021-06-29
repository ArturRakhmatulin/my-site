<?php
session_start();
?>
<?php
require_once("dbconnect.php");
$pole = $_GET['surname'];
$pole2 = $_GET['name'];
$pole3 = $_GET['middle_name'];
$pole4 = $_GET['mail'];
$pole5 = $_GET['telephone'];
$pole6 = $_GET['administration'];
$pole7 = $_GET['subjects'];
$pole8 = $_GET['regions'];
$_SESSION['name'] = $pole;

//echo $_GET['certificate'];
if (! empty($_GET['surname'])) {
$message = "Вы добавили преподователя". $pole;
$mysql = "INSERT INTO personal(surname, name, middle_name, mail, televon, id_administration, id_subject, id_region ) VALUES('".$pole."', '".$pole2."', '".$pole3."', '".$pole4."', '".$pole5."', '".$pole6."', '".$pole7."', '".$pole8."');"; 
$result = $dbcon->query($mysql);
}
else {die ("Ошибка: Вы ничего не ввели");}
if (!$result) {
die('Ошибка выполнения запроса:');
}
header("Location: personal.php");

?>
