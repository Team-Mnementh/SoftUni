<!DOCTYPE html>
<html>
<head>
	<title>Annual Expenses</title>
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
	<label for="input">Enter numbers of years</label>
	<input type="text" name="input" id="input">
	<input type="submit" value="Show costs">
</form>
<?php
if (isset($_POST['input']) && !empty($_POST['input'])) {
	$numberOfYears = $_POST['input'];
?>
<table border="1">
	<tr>
		<th>Year</th>
		<th>January</th>
		<th>February</th>
		<th>March</th>
		<th>April</th>
		<th>May</th>
		<th>June</th>
		<th>July</th>
		<th>August</th>
		<th>September</th>
		<th>October</th>
		<th>November</th>
		<th>December</th>
		<th>Total:</th>
	</tr>
<?php
for ($i=2014; $i > 2014-$numberOfYears; $i--) { 
	$total = 0;
?>
	<tr>
		<td><?=$i?></td>
		<?php
		for ($month=0; $month < 12; $month++) {
			$expense = rand(0, 999);
			$total+=$expense;
		?> 
		<td><?=$expense?></td>
		<?php	
		}
		?>
		<td><?=$total?></td>
	</tr>

<?php		
	}
}
?>
</table>
</body>
</html>