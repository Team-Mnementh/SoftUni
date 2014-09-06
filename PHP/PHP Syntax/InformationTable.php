<!DOCTYPE html>
<html>
<head>
	<title>HTML Table</title>
	<style type="text/css">
	th{
		background-color: #ffa100;
		text-align: left;
	}
	td{
		text-align: right;
	}
	</style>
</head>
<body>
<?php
$name = 'Gosho';
$phone = '0882-321-423';
$age = 24;
$address = 'Hadji Dimitar';
?>
<table border="1">
<tr>
	<th>Name</th>
	<td><?=$name?></td>
</tr>
<tr>
	<th>Phone number</th>
	<td><?=$phone?></td>
</tr>
<tr>
	<th>Age</th>
	<td><?=$age?></td>
</tr>
<tr>
	<th>Address</th>
	<td><?=$address?></td>
</tr>
</table>
</body>
</html>
