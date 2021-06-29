<?php
  session_start();
	require_once("dbconnect.php");
	if (isset ($_GET['view_button']))
	{
	  
	
	$mysql = "Select name From administration;";
	$result = $dbcon -> query($mysql);
		if (!$result) 
		{
				die('Ошибка выполнения запроса:');
		}
?>
<table width='880px' height='60px' cols='4' border='grey'>
<tr>
<td>Должность:</td>
</tr>
<?php
	while  ($myrow = $result->fetch_array())
	{
		
		echo "<tr><td>".$myrow['name']."</td>";
		
	}
?>	
  </table>
  <?	
	}		
