<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to round up an integer value to the next multiple of 5</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function int_round5(num)
{
    return Math.ceil(num/5)*5;
}

console.log(int_round5(32));
console.log(int_round5(137));
console.log(int_round5(142));