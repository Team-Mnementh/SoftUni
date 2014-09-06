<!DOCTYPE html>
<html>
<head>
	<title>Print Tags</title>
</head>
<body>
<form method="POST">
	<label for="input">Enter tags:</label><br />
	<input type="text"  id="input" name="tags"/>
	<input type="submit" value="Submit" />
</form>
<?php
if (isset($_POST['tags']) && !empty($_POST['tags'])) {
	$tagsList = explode(', ', $_POST['tags']);
	foreach ($tagsList as $key => $value) {
		?><p><?=$key?> : <?=$value?></p>
		<?php
	}
}
?>
</body>
</html>
