<?php
session_start();
?>
<?php 
if (isset($_SESSION['name'])){
	echo "Вы добавили сотрудника  ". $_SESSION['name'] ."<br>";
	session_destroy();
}
?>
<p>Добавить сотрудника</p>
<form action="personal_add.php" id="form-sendmail" method="GET">
  <p>Введите фамилию:<br> 
  <input type="text" name="surname" /></p>
  <p>Введите имя:<br> 
  <input type="text" name="name" /></p>
  <p>Введите отчество:<br> 
  <input type="text" name="middle_name" /></p>
  <p>Введите почту:<br> 
  <input type="text" name="mail" /></p>
  <p>Введите телефон:<br> 
  <input type="text" name="telephone" /></p>
  <p>Выберите должность:<br>
  <select name="administration" size="5" multiple="multiple">
	  
    <?php
    session_start();
    require_once("dbconnect.php");
        $mysql = "Select * FROM administration;";
        $result = $dbcon -> query($mysql);
        while ($myrow = $result->fetch_array())
        {
          echo '<option '.selected.' value="'.$myrow['id_administration'].'">'.$myrow['name'].'</option>';
         
        }
        echo "<tr><td>".$myrow['name']."</td>";
	    ?>
  </select></p> 
  <p>Выберите предмет:<br>
  <select name="subjects" size="5" multiple="multiple">
  <?php
  
    session_start();
    require_once("dbconnect.php");
        $mysql = "Select * FROM subjects;";
        $result = $dbcon -> query($mysql);
        while ($myrow = $result->fetch_array())
        {
          echo '<option '.selected.' value="'.$myrow['id_subject'].'">'.$myrow['name'].'</option>';
         
        }
        echo "<tr><td>".$myrow['name']."</td>";
	    ?>
  </select></p> 
  <p>Выберите область:<br> 
  <select name="regions" size="5" multiple="multiple">
  <?php
  
    session_start();
    require_once("dbconnect.php");
        $mysql = "Select * FROM regions;";
        $result = $dbcon -> query($mysql);
        while ($myrow = $result->fetch_array())
        {
          echo '<option '.selected.' value="'.$myrow['id_regions'].'">'.$myrow['name'].'</option>';
         
        }
        echo "<tr><td>".$myrow['name']."</td>";
	    ?>
  </select></p> 
  <input type="submit" value="Добавить">
</form>