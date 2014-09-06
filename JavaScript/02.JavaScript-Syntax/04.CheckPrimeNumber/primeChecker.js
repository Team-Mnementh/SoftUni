function isPrime (value) {
	var maxDivider = Math.sqrt(value);
	var prime = true;
	for(var i = 2; i<=maxDivider; i++){
		if (value % i  === 0) {
			prime = false;
		}
	}
	return prime;
}
console.log(isPrime(7));
console.log(isPrime(254));
console.log(isPrime(587));