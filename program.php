<?php
session_start();
?>
<?php 
if (isset($_SESSION['name'])){
	echo "Добавлен курс  ". $_SESSION['name'] ."<br>";
	session_destroy();
}
?>
<div class="container">
  <form action="program_add.php" id="form-sendmail" method="GET">
      <p>Введите курс:<br> 
        <input type="text" name="name" />
      </p>
      <p>Удостоверение:<br> 
        <input type="text" name="certificate" />
      </p>
      <p>Срок обучения:<br> 
        <input type="text" name="lenght" />
      </p>
      <p>Цена:<br> 
        <input type="text" name="cost" />
      </p>
      <input type="submit" value="Добавить">
  </form>
</div>