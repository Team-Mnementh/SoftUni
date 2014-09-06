<!DOCTYPE html>
<html>
<head>
	<title>Calculate Interest</title>
	<meta charset="UTF-8" />
	<style type="text/css">
	form{
		width: 450px;
	}
	</style>
</head>
<body>
	<form>
		<label for="amount">Enter Amount</label>
		<input type="text" name="amount" id="amount" /><br />

		<label for="usd">USD</label>
		<input type="radio" value="USD" name="currency" id="usd">

		<label for="eur">EUR</label>
		<input type="radio" value="EUR" name="currency" id="eur">

		<label for="bgn">BGN</label>
		<input type="radio" value="BGN" name="currency" id="bgn"><br />

		<label for="interest">Compound Interest Amount</label>
		<input type="text" name="interest" id="interest" /><br />

		<select name="period">
                <option value="6 months" selected>6 Months</option>
                <option value="12 months">1 Year</option>
                <option value="24 months">2 Years</option>
                <option value="60 months">5 Years</option>
            </select>
        <input type="submit" name="calculate" value="Calculate">
	</form>
<?php
if (count($_POST) == 5) {
	$amount   = doubleval($_POST['amount']);
	$currency = $_POST['currency'];
	$interest = doubleval($_POST['interest'])/12/100;
	$months   = 12*doubleval($_POST['period']);
	for ($i = 0; $i < $months; $i++) {
		$amount += $amount*$interest;
	}
	$result = $currency.' '.round($amount, 2);
}

if (isset($result)) {
	echo $result;
}
?>
</body>
</html>