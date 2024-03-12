<?php
function mergeSort($list1) {
    $length = count($list1);

    if ($length <= 1) {
        return $list1;
    }

    $mid = (int) ($length / 2);

    $left = [];
    for ($i = 0; $i < $mid; $i++) {
        array_push($left, $list1[$i]);
    }

    $right = [];
    for ($i = $mid; $i < $length; $i++) {
        array_push($right, $list1[$i]);
    }

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $leftLength = count($left);
    $rightLength = count($right);
    $i = $j = 0;

    while ($i < $leftLength && $j < $rightLength) {
        if ($left[$i] > $right[$j]) {
            array_push($result, $left[$i]);
            $i++;
        } else {
            array_push($result, $right[$j]);
            $j++;
        }
    }

    while ($i < $leftLength) {
        array_push($result, $left[$i]);
        $i++;
    }

    while ($j < $rightLength) {
        array_push($result, $right[$j]);
        $j++;
    }

    return $result;
}

$list1 = [3, 5, 1, 8, -10];
$sortedList = mergeSort($list1);
print_r($sortedList);