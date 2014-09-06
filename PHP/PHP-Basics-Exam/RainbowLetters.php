<?php
$text = $_GET['text'];
$red = $_GET['red'];
$green = $_GET['green'];
$blue = $_GET['blue'];
$nth = $_GET['nth'];

$redToHex = dechex($red);
$greenToHex = dechex($green);
$blueToHex = dechex($blue);

if (strlen($redToHex) === 1) {
	$redToHex='0'.$redToHex;
}
if (strlen($greenToHex) === 1){
	$greenToHex ='0'.$greenToHex;
}
if (strlen($blueToHex) === 1){
	$blueToHex ='0'.$blueToHex;
}
$rgb = '#';
$rgb.=strtolower($redToHex.$greenToHex.$blueToHex);

$result = '';
for ($i=1; $i <= strlen($text); $i++) {
	if ($i % $nth === 0 && $i > 0) {
		$result.='<span style="color: '.$rgb.'">'.htmlspecialchars($text[$i-1]).'</span>';
	}
	else{
		$result.= htmlspecialchars($text[$i-1]);
	}
}
echo '<p>'.$result.'</p>';
?>