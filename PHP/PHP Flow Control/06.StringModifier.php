<!DOCTYPE html>
<html>
<head>
	<title>String Modifier</title>
	<meta charse="UTF-8" />
</head>
<body>
	<form method="POST">
		<input type="text" name="input">
		
		<input type="radio" name="radio" id="palindrome" value="palindrome">
		<label for="palindrome">Check Palindrome</label>
		
		<input type="radio" name="radio" id="reverse" value="reverse">
		<label for="reverse">Reverse String</label>

		
		<input type="radio" name="radio" id="split" value="split">
		<label for="split">Split</label>
		
		<input type="radio" name="radio" id="hash" value="hash">
		<label for="hash">Hash String</label>
		
		<input type="radio" name="radio" id="shuffle" value="shuffle">
		<label for="shuffle">Shuffle String</label>

		<input type="submit" value="Submit">
	</form>
	<?php
	if (isset($_POST) && !empty($_POST)) {
		$input = $_POST['input'];
		$btnValue =  $_POST['radio'];
		if ($btnValue == 'palindrome') {
			if ($input == strrev($input)) {
				echo $input.' is a palindrome';
			}
			else{
				echo $input.' is not a palindrome';
			}
		}
		else if($btnValue == 'reverse'){
			echo strrev($input);
		}
		else if ($btnValue == 'split') {
			$arr = str_split($input);
            echo implode($arr, ' ');
		}
		else if($btnValue == 'hash') {
        echo crypt($input);
	    }
	    else if($btnValue == 'shuffle') {
	        echo str_shuffle($input);
	    }
	}
	?>
</body>
</html>