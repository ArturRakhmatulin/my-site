<?php
session_start();
?>
<?php
require_once("dbconnect.php");
$pole = $_GET['name'];
$_SESSION['name'] = $pole;

//echo $_GET['certificate'];
if (! empty($_GET['name'])) {
$message = "Вы добавили область". $pole;
$mysql = "INSERT INTO regions( name ) VALUES('".$pole."');"; 
$result = $dbcon->query($mysql);
}
else {die ("Ошибка: Вы ничего не ввели");}
if (!$result) {
die('Ошибка выполнения запроса:');
}
header("Location: index.php");

?>