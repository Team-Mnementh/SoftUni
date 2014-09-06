function checkBrackets (input) {
	
	var leftBracket = 0;
	var rightBracket = 0;
	for (var i = 0; i < input.length; i++) {
		if (input[i] == '(') {
			leftBracket++;
		}
		else if(input[i] == ')'){
			rightBracket++;
		}
	}
	if (leftBracket == rightBracket) {
			console.log('correct');
		}
		else{
			console.log('incorrect');
		}
}
checkBrackets('( ( a + b ) / 5 – d )');
checkBrackets(') ( a + b ) )');
checkBrackets('( b * ( c + d *2 / ( 2 + ( 12 – c / ( a + 3 ) ) ) )');