<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue"){
      continue;
      echo "$x <br>";
  }
//   elseif($x === "yellow"){
//     echo "<p>$x</p>";
//   }
}



?>
    
</body>
</html>

