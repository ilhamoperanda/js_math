<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to count the digits of an integer.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function digits_count(n) {
  var count = 0;
  if (n > 1) ++count;

  while (n / 10 >= 1) {
    n /= 10;
    ++count;
  }

  return count;
}

console.log(digits_count(12112));
