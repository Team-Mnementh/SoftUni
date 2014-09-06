function findPalindromes(input) {
	var words = input.split(/[^a-zA-z]+/);
	var reversedWords = [];
	var result = [];
	for (var i = 0; i < words.length - 1; i++) {
		reversedWords[i] = words[i].split('').reverse().join('').toLowerCase();

		if (words[i].toLowerCase() == reversedWords[i].toLowerCase()) {
			result.push(words[i]);
		}
	}
	console.log(result.join(', '));
}

findPalindromes('There is a man, his name was Bob.');