<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 02</title>
</head>
<body>
    
<?php
$fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes", "Pineapple", "Strawberry");
?>

<ol>
<?php
for ($i = 0; $i < count($fruits); $i++) {
    echo "<li>" . $fruits[$i] . "</li>";
}
?>
</ol>

</body>
</html>