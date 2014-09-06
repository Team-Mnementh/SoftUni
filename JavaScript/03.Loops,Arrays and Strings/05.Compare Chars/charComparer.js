function compareChars(first, second) {
	var strFirst = '';
	var strSecond = '';
	for (var f = 0; f < first.length; f++) {
		strFirst += first[f];
	}
	for (var s = 0; s < second.length; s++) {
		strSecond += second[s];
	}
	if (strFirst == strSecond) {
		console.log('Equal');
	}
	else {
		console.log('Not Equal');
	}
}
compareChars(['1', 'f', '1', 's', 'g', 'j', 'f', 'u', 's', 'q'], ['1', 'f', '1', 's', 'g', 'j', 'f', 'u', 's', 'q']);
compareChars(['3', '5', 'g', 'd'],['5', '3', 'g', 'd']);
compareChars(['q', 'g', 'q', 'h', 'a', 'k', 'u', '8', '}', 'q', '.', 'h', '|', ';'], ['6', 'f', 'w', 'q', ':', '”', 'd', '}', ']', 's', 'r']);