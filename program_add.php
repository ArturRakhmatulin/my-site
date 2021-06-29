<?php
session_start();
?>
<?php
require_once("dbconnect.php");
$pole = $_GET['name'];
$pole2 = $_GET['certificate'];
$pole3 = $_GET['lenght'];
$pole4 = $_GET['cost'];
$_SESSION['name'] = $pole; 
//echo $_GET['certificate'];
if (! empty($_GET['name'])) {
$message = "Вы добавили кур". $pole;
$mysql = "INSERT INTO programs(name, certificate, lenght, cost) VALUES('".$pole."', '".$pole2."','".$pole3."','".$pole4."');";

$result = $dbcon->query($mysql); }
else {die ("Ошибка: Вы ничего не ввели");}
if (!$result) {
die('Ошибка выполнения запроса:');
}
header("Location: program.php");

?>