function bitChecker (number) {
		var shiftNumber = number >> 3;
		var bit = shiftNumber & 1;
		if (bit == 1) {
			return true;
		}
		else{
			return false;
		}
}
console.log(bitChecker(333));
console.log(bitChecker(425));
console.log(bitChecker(2567564754));