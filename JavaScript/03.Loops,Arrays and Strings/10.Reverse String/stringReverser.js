function reverseString (input) {
	input = input.split('').reverse().join('');
	return input;
}

console.log(reverseString('sample'));
console.log(reverseString('softUni'));
console.log(reverseString('java script'));