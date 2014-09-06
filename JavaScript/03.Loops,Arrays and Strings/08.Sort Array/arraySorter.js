function sortArray(input) {
	input = input.map(Number);
	var min = input[0];
	var position = 0;
	var result = [];

	while (input.length > 0) {
		for (var i = 0; i < input.length; i++) {
			if (min > input[i]) {
				min = input[i];
			}
		}
		result[position] = min;
		input.splice(input.indexOf(min), 1);
		position++;
		min = input[0];
	}
	console.log(result.join(', '));
}
var input = ['12', '12', '50', '2', '6', '22', '51', '712', '6', '3', '3'];
var input1 = ['5', '4', '3', '2', '1'];
sortArray(input);
sortArray(input1);
sortArray(['30','12','44','102','8','0','1024']);