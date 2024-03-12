<?php
function DecimalToBinary($num)
{
    $b = [];
    $a = [];
    while ($num !=0)
    {
        array_push($b,$num % 2);
        $num = floor($num / 2);
    }
    for($i = count($b)-1; $i >= 0; $i--){
        array_push($a,$b[$i]);
    }
    $binaryNumber = implode('',$a);
    return $binaryNumber;
}

$number = 500;
$binaryNumber = DecimalToBinary($number);
print_r($binaryNumber);