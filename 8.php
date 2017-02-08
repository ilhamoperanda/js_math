<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>GCD of two numbers</title>
  </head>
  <body>
</body>
  </html>
JavaScript Code :

function gcd_two_numbers(x, y) {
  if ((typeof x !== 'number') || (typeof y !== 'number')) 
    return false;
  x = Math.abs(x);
  y = Math.abs(y);
  while(y) {
    var t = y;
    y = x % y;
    x = t;
  }
  return x;
}

console.log(gcd_two_numbers(12, 13));
console.log(gcd_two_numbers(9, 3));