function calcSupply (age, maxAge, foodAmount) {
	var totalDays = (maxAge - age)*365;
	if (foodAmount <= 1) {
		console.log(totalDays * foodAmount + 'kg of chokolate would be enough until I am ' + maxAge + ' years old');
	}
	else if(foodAmount >= 2){
		console.log(totalDays * foodAmount + 'kg of fruits would be enough until I am ' + maxAge + ' years old');
	}
	else{
		console.log(totalDays * foodAmount + 'kg of nuts would be enough until I am ' + maxAge + ' years old');
	}
}
(calcSupply(38,118,0.5));
(calcSupply(20,87,2));
(calcSupply(16,102,1.1));