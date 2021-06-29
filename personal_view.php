<?php
	session_start();
	require_once("dbconnect.php");
	$name = $_GET['view_personal'];
	$_SESSION['view_personal'] = $name; 
	if (isset ($_GET['view_button']))
	{
	
	if (!empty ($name))
	{
			$mysql = "SELECT surname, personal.name, middle_name, mail, televon, administration.name AS name_administration, regions.name AS name_region, subjects.name AS name_subject FROM `personal` INNER JOIN `administration` ON personal.id_administration = administration.id_administration JOIN `regions` ON personal.id_region = regions.id_regions JOIN `subjects` ON personal.id_subject = subjects.id_subject WHERE personal.surname = '".$name."';";
			$result = $dbcon -> query($mysql);
		if (!$result) 
		{
				die('Ошибка выполнения запроса:');
		}
?>
		<table width='1500px' height='60px' cols='8' border='grey'>
	<tr>
	<td>Фамилия:</td><td>Имя:</td><td>Отчество:</td><td>Почта:</td><td>Телефон:</td><td>Должность:</td><td>Преподователь:</td><td>Область:</td>
	</tr>
<?php
	while  ($myrow = $result->fetch_array() )
	{
		
		
		echo "<tr><td>".$myrow['surname']."</td>";
		echo "<td>".$myrow['name']."</td>";
		echo "<td>".$myrow['middle_name']."</td>";
		echo "<td>".$myrow['mail']."</td>";
		echo "<td>".$myrow['televon']."</td>";
    echo "<td>".$myrow['name_administration']."</td>";
		echo "<td>".$myrow['name_region']."</td>";
		echo "<td>".$myrow['name_subject']."</td></tr>";
		
	}
	?>	
</table>
	<?php
			while ($myrow = $result->fetch_array())
			{
				echo $myrow['name'];
			}	
	}
	else
	{
			$mysql = "SELECT surname, personal.name, middle_name, mail, televon, administration.name AS name_administration, regions.name AS name_region, subjects.name AS name_subject FROM `personal` INNER JOIN `administration` ON personal.id_administration = administration.id_administration JOIN `regions` ON personal.id_region = regions.id_regions JOIN `subjects` ON personal.id_subject = subjects.id_subject ;";
			
		$result = $dbcon -> query($mysql);
		if (!$result) 
		{
			die('Ошибка выполнения запроса:');
		}
	
?> 
<table width='1500px' height='60px' cols='8' border='grey'>
	<tr>
	<td>Фамилия:</td><td>Имя:</td><td>Отчество:</td><td>Почта:</td><td>Телефон:</td><td>Должность:</td><td>Преподователь:</td><td>Область:</td>
	</tr>
<?php
	while  ($myrow = $result->fetch_array())
	{
		
			echo "<tr><td>".$myrow['surname']."</td>";
		echo "<td>".$myrow['name']."</td>";
		echo "<td>".$myrow['middle_name']."</td>";
		echo "<td>".$myrow['mail']."</td>";
		echo "<td>".$myrow['televon']."</td>";
    echo "<td>".$myrow['name_administration']."</td>";
		echo "<td>".$myrow['name_region']."</td>";
		echo "<td>".$myrow['name_subject']."</td></tr>";
		
		
	}
	?>	
</table>
<?	}
	}		
?>