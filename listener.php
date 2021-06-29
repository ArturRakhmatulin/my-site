<?php
session_start();
?>
<?php 
if (isset($_SESSION['name'])){
	echo "Вы добавили слушателя  ". $_SESSION['name'] ."<br>";
	session_destroy();
}
?>

<h2>Анкета</h2>
<form action="input.php" id="form-sendmail" method="GET">
<div class="mb-3">
<p>Введите имя:<br> 
<input type="text" name="firstname" /></p>
<p>Введите телефон:<br> 
<input type="text" name="telephone" /></p>
<p>Введите почту:<br> 
<input type="text" name="mail" /></p>
<p>Напишите курс: <br>
<select name="course" size="5" multiple="multiple">
	  
    <?php
    session_start();
    require_once("dbconnect.php");
        $mysql = "Select * FROM programs;";
        $result = $dbcon -> query($mysql);
        while ($myrow = $result->fetch_array())
        {
          echo '<option '.selected.' value="'.$myrow['name'].'">'.$myrow['name'].'</option>';
         
        }
        echo "<tr><td>".$myrow['name']."</td>";
	    ?>
</select></p>
<input type="submit" value="Выбрать">
</div>
</form>
