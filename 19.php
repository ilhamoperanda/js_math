<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pythagorean Theorem</title>
</head>
<body></body>
</html>
JavaScript Code :

function pythagorean_theorem(x, y) {
  if ((typeof x !== 'number') || (typeof y !== 'number')) 
return false; 
		return Math.sqrt(x * x + y * y);
	}

console.log(pythagorean_theorem(2, 4));
console.log(pythagorean_theorem(3, 4));