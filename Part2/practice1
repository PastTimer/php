<?php 
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

/**
 * Calculates the sum of two numbers.
 *
 * @param int $num1 The first number.
 * @param int $num2 The second number.
 * @return int The sum of the two numbers.
 */

function calculate_TotalPrice($items): int {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

$totalPrice = calculate_TotalPrice($items);
echo "Total price: $" . $totalPrice;


/**
 * Modifies a string by removing spaces and converting to lowercase.
 *
 * @param string $string The string to be modifed.
 * @return string The modified string.
 */

function modifyString($string) : string {
    $string = str_replace(" ", "", $string);
    $string = strtolower($string);
    return $string;
}

$string = "This is a poorly written program with little structure and readability";
$modifiedString = modifyString($string);
echo "\nModified string: " . $modifiedString;

/**
 * Cecks if a number is even or odd.
 *
 * @param number $number The number to be checked.
 * @return string The result of the check.
 */

function checkNumber($number) : string {
    if ($number % 2 == 0) {
        return "The number is even";
    } else {
        return "The number is odd";
    }
}

$number = 42;
$result = checkNumber($number);
echo "\n" . $result;

?>