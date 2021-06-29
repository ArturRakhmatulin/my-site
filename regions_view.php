<?php
  session_start();
	require_once("dbconnect.php");
	
	if (isset ($_GET['view_button']))
	{
	  
	
	$mysql = "Select name From regions;";
	$result = $dbcon -> query($mysql);
		if (!$result) 
		{
				die('Ошибка выполнения запроса:');
		}
?>
<table  height='60px' cols='1' border='grey'>
<tr>
<td>Области:</td>
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