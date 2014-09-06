function Solve(input) {
	var start = parseInt(input[0]);
	var end = parseInt(input[1]);
	console.log('<table>');
	console.log('<tr><th>Num</th><th>Square</th><th>Fib</th></tr>');

	for (var i = start; i <= end; i++) {
		var doubleNum = i * i;
		if (isFibonacci(i) === 'yes') {
			console.log('<tr><td>' + i + '</td><td>' + doubleNum + '</td><td>yes</td></tr>');
		}
		else{
			console.log('<tr><td>' + i + '</td><td>' + doubleNum + '</td><td>no</td></tr>');
		}
	}

	function isFibonacci(number) {
		var arr = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765, 10946, 17711, 28657, 46368, 75025, 121393, 196418, 317811, 514229, 832040, 1346269];
		var isFib;
		if (arr.indexOf(number) !== -1) {
		    	isFib = 'yes';
		}
		else{
			isFib = 'no';
		}
		return isFib;
	}
	console.log('</table>');
}

// Solve(['2', '6']);
Solve(['55', '56']);