<?php
session_start();
	require_once("dbconnect.php");
	$name = $_GET['view_programs'];
	$_SESSION['view_programs'] = $name; 
	if (isset ($_GET['view_button']))
	{
	
	if (!empty ($name))
	{
			$mysql = "Select name, certificate, lenght, cost From programs Where name = '".$name."';";
			$result = $dbcon -> query($mysql);
		if (!$result) 
		{
				die('Ошибка выполнения запроса:');
		}
		?>
		<table width='880px' height='60px' cols='4' border='grey'>
	<tr>
	<td>Имя слушателя:</td><td>Документ:</td><td>Срок обучения:</td><td>Стоимость:</td>
	</tr>
<?php
	while  ($myrow = $result->fetch_array())
	{
		
		echo "<tr><td>".$myrow['name']."</td>";
		echo "<td>".$myrow['certificate']."</td>";
		echo "<td>".$myrow['lenght']."</td>";
    echo "<td>".$myrow['cost']."</td></tr>";
		
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
		$mysql = "Select name, certificate, lenght, cost From programs;";
		
		$result = $dbcon -> query($mysql);
		if (!$result) 
		{
			die('Ошибка выполнения запроса:');
		}
	
?> 
<table width='880px' height='60px' cols='4' border='grey'>
	<tr>
	<td>Имя слушателя:</td><td>Телефон:</td><td>Почта:</td><td>Курс:</td>
	</tr>
<?php
	while  ($myrow = $result->fetch_array())
	{
		
    echo "<tr><td>".$myrow['name']."</td>";
		echo "<td>".$myrow['certificate']."</td>";
		echo "<td>".$myrow['lenght']."</td>";
    echo "<td>".$myrow['cost']."</td></tr>";
		
		
	}
	?>	
</table>
<?	}
	}		
?>