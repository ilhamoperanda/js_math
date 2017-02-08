<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>Javascript random function</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function min(input) {
     if (toString.call(input) !== "[object Array]")  
       return false;
  return Math.min.apply(null, input);
	}

console.log(min([12,34,56,1]));
console.log(min([-12,-34,0,-56,-1]));