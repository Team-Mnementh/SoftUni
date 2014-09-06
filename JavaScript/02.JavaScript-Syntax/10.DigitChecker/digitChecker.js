function checkDigit (number) {
	var strNum = number.toString();
	if(strNum[strNum.length-3] == 3){
		console.log(true);
	}
	else{
		console.log(false);
	}
}
checkDigit(1235);
checkDigit(25368);
checkDigit(123456);