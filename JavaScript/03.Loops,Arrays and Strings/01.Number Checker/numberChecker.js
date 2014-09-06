function printNumbers(n) {
	var arr = [];
	for (var i = 1; i <= n; i++) {
		if ((i % 4 == 0) || (i % 5 == 0)) {
			continue;
		}
		arr.push(i);
	}
	if (n < 0) {
		console.log('no');
	}
	else{
		console.log(arr.join(','));
	}
}
printNumbers(20);
printNumbers(-5);
printNumbers(13);