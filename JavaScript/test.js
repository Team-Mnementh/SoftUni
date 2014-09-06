function Solve(input) {

	var numbers;
	var sum = 0;
	var maxSum = 0;
	for (var i = 2; i < input.length - 1; i++) {
		numbers = input[i].match(/\d+\.?\d*/g).map(Number);
		
		// console.log(numbers);

		for (var j = 0; j < numbers.length; j++) {
			sum += numbers[j];

			if (maxSum < sum) {
				maxSum = sum;
			}
		}
		console.log(sum);
		sum = 0;
	}
	// console.log(maxSum);
}
Solve(['<table>',
	'<tr><th>Town</th><th>Store1</th><th>Store2</th><th>Store3</th></tr>',
	'<tr><td>Sofia</td><td>26.2</td><td>8.20</td><td>-</td></tr>',
	'<tr><td>Varna</td><td>11.2</td><td>18.00</td><td>36.10</td></tr>',
	'<tr><td>Plovdiv</td><td>17.2</td><td>12.3</td><td>6.4</td></tr>',
	'<tr><td>Bourgas</td><td>-</td><td>24.3</td><td>-</td></tr>',
	'</table>'
]);

// Solve([
// 	'<table>',
// 	'<tr><th>Town</th><th>Store1</th><th>Store2</th><th>Store3</th></tr>',
// 	'<tr><td>Sofia</td><td>12850</td><td>-560</td><td>20833</td></tr>',
// 	'<tr><td>Rousse</td><td>-</td><td>50000.0</td><td>-</td></tr>',
// 	'<tr><td>Bourgas</td><td>25000</td><td>25000</td><td>-</td></tr>',
// 	'</table>'
// ]);