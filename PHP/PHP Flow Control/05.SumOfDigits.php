<!DOCTYPE html>
<html>
<head>
	<title>Sum Of Digits</title>
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
	<form method="POST">
		<label for="input">Input string: </label>
		<input type="text" name="input" id="input">
		<input type="submit" value="Submit">
	</form>
	<table border="1">
	<?php
	if (isset($_POST['input']) && !empty($_POST['input'])) {
		$input = $_POST['input'];
		$nums = explode(', ', $input);

		foreach ($nums as $num) {
	?>
	<tr>
		<td><?=$num?></td>
	
	<?php
			if (is_numeric($num)) {
				$sum = 0;
				for ($i=0; $i < strlen($num); $i++) { 
					$sum+=$num[$i];
				}
	?>
			<td><?=$sum?></td>
	<?php
			}
			else{
	?>
				<td>I cannot sum that</td>
	<?php
			}
		}
	}
	?>
		</tr>
	</table>
</body>
</html>
	