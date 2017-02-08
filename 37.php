<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to limit a value inside a certain range.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function value_limit(val, min, max) {
  return val < min ? min : (val > max ? max : val);
}

console.log(value_limit(7, 1, 12));
console.log(value_limit(-7, 0, 12));
console.log(value_limit(15, 0, 12));