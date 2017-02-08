<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function which will return values that are powers of two</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function isPower_of_two(num)
  {
     return num && (num & (num - 1)) === 0;
}

console.log(isPower_of_two(64));  
console.log(isPower_of_two(94));