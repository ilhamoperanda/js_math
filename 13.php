<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>Test if a number is a power of 2</title>
  </head>
  <body>
</body>
  </html>
JavaScript Code :

function power_of_2(n) {
 if (typeof n !== 'number') 
      return 'Not a number'; 

    return n && (n & (n - 1)) === 0;
}

console.log(power_of_2(16));
console.log(power_of_2(18));
console.log(power_of_2(256));