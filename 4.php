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

rand = function(min, max) {
  if (min==null && max==null)
    return 0;    
  
  if (max == null) {
      max = min;
      min = 0;
    }
    return min + Math.floor(Math.random() * (max - min + 1));
  };
 console.log(rand(20,1));
 console.log(rand(1,10));
 console.log(rand(6));
 console.log(rand());