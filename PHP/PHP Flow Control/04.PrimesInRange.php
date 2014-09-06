<!DOCTYPE html>
<html>
<head>
	<title>Prime In Range</title>
	<meta charse="UTF-8" />
</head>
<body>
<form method="POST">
	<label for="startIndex">Starting index:</label>
	<input type="text" name="startIndex" id="startIndex">
	<label for="endIndex">End:</label>
	<input type="text" name="endIndex" id="endIndex">
	<input type="submit" value="Submit">
</form>

<?php
if (isset($_POST) && !empty($_POST)) {
	$startIndex = $_POST['startIndex'];
	$endIndex = $_POST['endIndex'];
	for ($i=$startIndex; $i <= $endIndex ; $i++) { 
		$maxDivider = sqrt($i);
		$isPrime = true;
		for ($j=2; $j <= $maxDivider; $j++) { 
			if ($i % $j == 0) {
				$isPrime = false;
				break;
			}
		}
		if ($isPrime) {
			echo '<strong>'.$i.', </strong>';
		}
		else{
			echo $i.', ';
		}
	}
}
?>
</body>
</html>