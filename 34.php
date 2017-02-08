<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to convert radians to degrees</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function radians_to_degrees(radians)
{
  var pi = Math.PI;
  return radians * (180/pi);
}
          
console.log(radians_to_degrees(0.7853981633974483));