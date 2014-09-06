var currentTime = new Date();
var hours = currentTime.getHours();
var minutes = currentTime.getMinutes();
if (minutes.toString().length === 1) {
	console.log(hours + ":" + "0"+minutes);
}
else{
	console.log(hours + ":" + minutes);
}