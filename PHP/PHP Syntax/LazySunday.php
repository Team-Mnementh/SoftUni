<?php
$daysInMonth = date('t');
$month = date('F');
$year = date('o');
for ($i = 0; $i <= $daysInMonth; $i++) {
	$date = strtotime("$i $month $year");
	if (date('l', $date) == 'Sunday') {
		echo date('jS F, Y', $date).'<br>';
	}
}
?>