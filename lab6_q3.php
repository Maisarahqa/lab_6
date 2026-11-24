<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q3</title>
</head>
<body>
    
<?php

function calculateArea($length, $width) {
    $area = $length * $width;
    return $area;
}

$length = 10;
$width = 5;

$result = calculateArea($length, $width);

echo "<h2>Calculate Area of Rectangle</h2>";
echo "Length: " . $length . "<br>";
echo "Width: " . $width . "<br>";
echo "Area of Rectangle: " . $result;

?>

</body>
</html>