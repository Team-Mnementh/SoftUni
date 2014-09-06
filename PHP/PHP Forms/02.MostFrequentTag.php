<!DOCTYPE html>
<html>
<head>
	<title>Most Frequent Tag</title>
</head>
<body>
	<form method="post">
		<label for="input">Enter Tags:</label><br />
		<input type="text" name="tags" id="input">
		<input type="submit" value="Submit">
	</form>
<?php
if (isset($_POST['tags']) && !empty($_POST['tags'])) {
	$tagsList = explode(', ', $_POST['tags']);
	$tagsFreq = array();
	foreach ($tagsList as $tag) {
		if (isset($tagsFreq[$tag])) {
			$tagsFreq[$tag]++;
		} else {
			$tagsFreq[$tag] = 1;
		}
	}
	arsort($tagsFreq);
	foreach ($tagsFreq as $key => $value) {
		echo '<p>'.$key.' : '.$value.' times </p>';
	}
	echo 'Most Frequent Tag is: '.array_shift(array_keys($tagsFreq));
}
?>
</body>
</html>