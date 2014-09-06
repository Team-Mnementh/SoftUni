<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>

<form method="GET">
	<input type="text" name="name" placeholder="Name"><br>
	<input type="text" name="age" placeholder="Age"><br>
	<input type="radio" name="gender" id="male" value="male">
	<label for="male">Male</label><br>
	<input type="radio" name="gender" id="female" value="female">
	<label for="female">Female</label><br>
	<input type="submit" value="Submit">
</form>
<?php
if ($_GET) {
	echo 'My name is '.$_GET['name'].'. I am '.$_GET['age'].' years old. I am '.$_GET['gender'];
}

?>
</body>
</html>