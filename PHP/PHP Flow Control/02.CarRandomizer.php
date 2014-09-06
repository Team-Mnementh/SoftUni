<!DOCTYPE html>
<html>
<head>
	<title>Car Randomizer</title>
	<meta charset="UTF-8" />
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
<form>
	<label for="input">Enter cars</label>
	<input type="text" name="input" id="input">
	<input type="submit" value="Show result">
</form>
<?php

if (isset($_GET['input']) && !empty($_GET['input'])) {
	$colors = ['black', 'white', 'silver', 'red', 'green', 'blue'];
?>
	<table border="1">
	<tr>
		<th>Car</th>
		<th>Color</th>
		<th>Count</th>
	</tr>
<?php
	$cars = explode(', ', $_GET['input']);
	foreach ($cars as $car) :
	$count = rand(1, 5);
	$randColor = array_rand($colors);
?>
		<tr>
			<td><?=$car?></td>
			<td><?=$colors[$randColor]?></td>
			<td><?=$count?></td>
		</tr>
<?php endforeach;
}
?>
</table>

</body>
</html>