function soothsayer(numbers, language, cities, cars) {
	var result = [];
	result[0] = numbers[Math.floor(Math.random() * numbers.length)];
	result[1] = language[Math.floor(Math.random() * language.length)];
	result[2] = cities[Math.floor(Math.random() * cities.length)];
	result[3] = cars[Math.floor(Math.random() * cars.length)];
	return 'You will work ' + result[0] + ' years on ' + result[1] + '.' + '\n' +
		'You will live in ' + result[2] + ' and drive ' + result[3];

}

console.log(soothsayer([3, 5, 2, 7, 9],
	["Java", "Python", "C#", "JavaScript", "Ruby"],
	["Silicon Valley", "London", "Las Vegas", "Paris", "Sofia"],
	["BMW", "Audi", "Lada", "Skoda", "Opel"]));