<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
			integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA=="
			crossorigin="anonymous">
</head>
<body>
<div class="container">
  <form action="listener.php" method="post">
    <input type="submit" value="Подать заявку на вступление" />
  </form>

  <div class="container-fluid">
  <br><p>Искать слушателя: </p>
  <form method="GET" action="listeners_view.php">
  <p><input class="post" action="input" type="text" name="view_listeners"></p>
  <input type="submit" name="view_button" value="Просмотреть"> 
  </form>
  </div>
  <br>
  <form action="program.php" method="post">
    <input type="submit" value="Добавить курс" />
  </form>
<div class="row">
  <div class="col-sm" style="">
  <br><p>Просмотреть курс: </p>
  <form method="GET" action="programs_view.php">
  <p><input class="post" action="input" type="text" name="view_programs"></p>
  <input type="submit" name="view_button" value="Просмотреть"> 
  </form>
  </div>
  
  <div class="col-sm" style="">
  <form action="personal.php" method="post">
    <input type="submit" value="Добавить сотрудника" />
  </form>
  </div>
<div class="col-sm" style="">
  <br><p>Просмотреть сотрудника: </p>
  <form method="GET" action="personal_view.php">
  <p><input class="post" action="input" type="text" name="view_personal"></p>
  <input type="submit" name="view_button" value="Просмотреть"> 
  </form>
  
  
  <form method="GET" action="administration_add.php">
  <div class="mb-1">
  <label  class="form-label">Добавить должность</label>
  <p><input  action="input" type="text" name="name"></p>
  </div>
  <input type="submit"  value="Добавить"> 
  </form>
  </div>
  <div class="col-sm" style="">
  <form method="GET" action="administration_view.php">
    <br><input type="submit" name="view_button" value="Просмотреть должность"> 
  </form>
  </div>
  <div class="col-sm" style="">
  <form method="GET" action="region_add.php">
  <div class="mb-1">
  <label  class="form-label">Добавить область</label>
  <p><input  action="input" type="text" name="name"></p>
  </div>
  
  <input type="submit"  value="Добавить"> 
  </form>
  </div>
    <div class="col-sm" style="">
    <form method="GET" action="regions_view.php">
    <br><input type="submit" name="view_button" value="Просмотреть области"> 
    </form>
    </div>
    <br>
    <div class="col-sm" style="">
    <form method="GET" action="subject_add.php">
    <div class="mb-1">
    <label  class="form-label">Добавить предмет</label>
    <p><input  action="input" type="text" name="name"></p>
    </div>
    <input type="submit"  value="Добавить"> 
    </form>
    </div>
    <div class="col-sm" style="">
    <form method="GET" action="subject_view.php">
    <br><input type="submit" name="view_button" value="Просмотреть предметы"> 
    </form>
</div>
  </div>
</div>
</body>
</html>


