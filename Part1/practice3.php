<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice03</title>
</head>
<body>
    <?php 
    $matrix = [
        [12, 23, 34],
        [45, 55, 62],
        [71, 84, 98]
    ];

    $row = 0;
    while ($row < count($matrix)) {
        $col = 0;
        while ($col < count($matrix[$row])) {
            $number = $matrix[$row][$col];
            if ($number % 2 === 0) {
                echo $number . " ";
            }
            $col++;
        }
        $row++;
    }
    ?>
</body>
</html>