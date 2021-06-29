<?php
session_start();
	require_once("dbconnect.php");
	$name = $_GET['view_listeners'];
	$_SESSION['view_listeners'] = $name; 
	if (isset ($_GET['view_button']))
	{
	
	if (!empty ($name))
	{
			$mysql = "Select name, televon, mail, course From listeners Where name = '".$name."';";
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
		echo "<td>".$myrow['televon']."</td>";
		echo "<td>".$myrow['mail']."</td>";
    echo "<td>".$myrow['course']."</td></tr>";
		
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
		$mysql = "Select name, televon, mail, course From listeners;";
		
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
		echo "<td>".$myrow['televon']."</td>";
		echo "<td>".$myrow['mail']."</td>";
    echo "<td>".$myrow['course']."</td></tr>";
		
		
	}
	?>	
</table>
<?	}
	}		
?>