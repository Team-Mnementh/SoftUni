function calcCircleArea(r){
	return Math.PI * (r*r);
}
document.getElementById("circleArea1").innerHTML = calcCircleArea(7);
document.getElementById("circleArea2").innerHTML = calcCircleArea(1.5);
document.getElementById("circleArea3").innerHTML = calcCircleArea(20);