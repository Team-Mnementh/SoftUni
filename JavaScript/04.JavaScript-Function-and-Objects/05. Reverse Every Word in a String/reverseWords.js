function reverseWordsInString(input) {
	input = input.split(' ');
	var result = '';
	for(var i = 0; i < input.length; i++){
		result+= input[i].split('').reverse().join('') + ' ';
	}
	console.log(result);
}
reverseWordsInString('Hello, how are you.');
reverseWordsInString('Life is pretty good, isn’t it?');