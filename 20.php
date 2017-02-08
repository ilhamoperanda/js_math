<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>Binomial coefficient</title>
  </head>
  <body>
</body>
  </html>
JavaScript Code :

function binomial(n, k) {
     if ((typeof n !== 'number') || (typeof k !== 'number')) 
  return false; 
    var coeff = 1;
    for (var x = n-k+1; x <= n; x++) coeff *= x;
    for (x = 1; x <= k; x++) coeff /= x;
    return coeff;
}

console.log(binomial(8,3));
console.log(binomial(10,2));