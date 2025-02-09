<?php
    if(isset($_POST['side1']) && isset($_POST['side2']) && isset($_POST['side3'])){
        $side1 = $_POST['side1'];
        $side2 = $_POST['side2'];
        $side3 = $_POST['side3'];

        $s = ($side1 + $side2 + $side3) / 2;
        $area_of_triangle = sqrt($s * ($s - $side1) * ($s - $side2) * ($s - $side3));

        echo "Area of the triangle is: " . number_format($area_of_triangle, 2);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <label for="side1">First side:</label>
        <input type="int" name="side1" id="side1">
        <label for="side2">Second side:</label>
        <input type="int" name="side2" id="side2">
        <label for="side3">Third side:</label>
        <input type="int" name="side3" id="side3">
        <input type="submit" value="Submit">
    </form>
</html>