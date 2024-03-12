<?php
function reverseDigits($number) {
    $reversedNumber = 0;
    $remainder = 0;

    while ($number > 0) {
        $remainder = $number % 10;
        $reversedNumber = $reversedNumber * 10 + $remainder;
        $number = (int) ($number / 10);
    }

    return $reversedNumber;
}

$originalNumber = 12345;
$flippedNumber = reverseDigits($originalNumber);

echo $flippedNumber;
