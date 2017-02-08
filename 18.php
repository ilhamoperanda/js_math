<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Product of values in an array</title>
</head>
<body></body>
</html>
JavaScript Code :

function product(input){
 if (toString.call(input) !== "[object Array]")
    return false;
  
         var total   =   1;
  
       for(var i=0;i<input.length;i++){
               if(isNaN(input[i])){
                 continue;
               }
                total   *=  Number(input[i]);
            }
          return total;
        }
console.log(product([1,2,3]));
console.log(product([100,-200,3]));
console.log(product([1,2,'a',3]));