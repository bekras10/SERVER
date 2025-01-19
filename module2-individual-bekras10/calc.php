<!DOCTYPE html>
<html lang="en">
<head><title>Calc Information</title></head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST['firstnumber'];
    $second = $_POST['secondnumber'];
    $operation = $_POST['operation'];
    if (!is_numeric($first) || !is_numeric($second)) {
        echo "<p>Please input valid numbers. Try again.</p>";
    }
    $first = (float)$first;
    $second = (float)$second;
    if ($operation == 'division') {
        if ($second == 0) {
            printf("<p>Sorry, you can't divide by 0! Try again.</p>");
        } else {
            $quotient = (float)($first / $second);
            printf("<p>You are dividing %.2f by %.2f. This results in %.2f.</p>", $first, $second, $quotient);
        }
    } else if ($operation == 'multiplication') {
        $product = (float)($first * $second);
        printf("<p>You are multiplying %.2f by %.2f. This results in %.2f.</p>", $first, $second, $product);
    } else if ($operation == 'subtraction') {
        $difference = (float)($first - $second);
        printf("<p>You are subtracting %.2f from %.2f. This results in %.2f.</p>", $second, $first, $difference);
    } else if ($operation == 'addition') {
        $sum = (float)($first + $second);
        printf("<p>You are adding %.2f to %.2f. This results in %.2f.</p>", $second, $first, $sum);
    } else {
        echo "<p>This is a four function calculator. Try again.</p>";
    }
}
?>