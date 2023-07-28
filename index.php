<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Different shapes</title>
</head>
<body>

    <h2>Different types of shapes formula shown below:</h2>

    <h3>Area of circle is: pi*r*r.</h3>
    <h3>Area of triangle is: (1/2)*breadth*height.</h3>
    <h3>Area of square is: area*area.</h3>
    <h3>Area of rectangle is: length*breadth.</h3>

    <?php

    $length = 2;
    $breadth = 4;
    $height = 6;
    $radius = 8;
    $pi = 3.14;
    $half = (1/2);
    $area = 45;

    $shape_1 = $pi*$radius*$radius;
    echo "<b>Area of Circle is: $shape_1 .";

    echo "</br>";

    $shape_2 = $half*$breadth*$height;
    echo "Area of Triangle is: $shape_2 .";

    echo "</br>";

    $shape_3 = $area*$area;
    echo "Area of Square is: $shape_3 .";

    echo "</br>";

    $shape_4 = $length*$breadth;
    echo "Area of Rectangle is: $shape_4 .";

    echo "</br>";

    ?>

</body>
</html>