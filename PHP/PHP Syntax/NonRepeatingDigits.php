<?php
$n = 247;
if ($n < 100) {
	echo 'no';
} else {
	for ($i = 102; $i <= $n; $i++) {
		$str = $i.'';
		if (strlen($str) > 3) {
			break;
		}
		if (($str[0] == $str[1] || $str[0] == $str[2]) || $str[1] == $str[2]) {
			continue;
		} else {
			echo $str.', ';
		}
	}
}

?>