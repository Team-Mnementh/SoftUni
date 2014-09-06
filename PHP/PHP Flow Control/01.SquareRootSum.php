<!DOCTYPE html>
<html>
<head>
	<title>Square Root Sum</title>
	<meta charset="UTF-8"/>
	<style type="text/css">
	table{
		border-collapse: collapse;
		border:1px solid darkblue;
		background-color:#cecece;
	}
	th{
		padding: 15px;
	}
	td{
		padding: 5px;
	}
	</style>
</head>
<body>
<table border="1">
		<tr>
			<th>Number</th>
			<th>Square</th>
		</tr>
<?php
$sum = 0;
for ($i=0; $i <= 100; $i+=2):?>
		<tr>
			<td><?=$i?></td>
			<td><?php
				$num = sqrt($i);
				$sum+=$num;
				echo round($num, 2);
			?></td>
		</tr>
<?php
endfor;
?>
<tr>
	<td><b>Total:</b></td>
	<td><?=round($sum, 2)?></td>
</tr>
</table>
</body>
</html>
