function findNthDigit(input) {
	var digit = input[0].toString();
	var number = input[1].toString().replace(/[^0-9]/g, '');

	var result = number[number.length - digit];
	
	if (result === undefined) {
		console.log('The number doesn’t have ' + digit + ' digits');
	} else {
		console.log(result);
	}
}

findNthDigit([1, 6]);
findNthDigit([2, -55]);
findNthDigit([6, 923456]);
findNthDigit([3, 1451.78]);
findNthDigit([6, 888.88]);