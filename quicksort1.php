<?php

/*
 * Complete the 'quickSort' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function quickSort($arr) {
    // Write your code here
    $pivot = $arr[0];
    $left = $equal = $right = [];
    
    foreach ($arr as $elem) {
        if ($elem < $pivot) {
            array_push($left, $elem);
        } elseif ($elem == $pivot) {
            array_push($equal, $elem);
        } else {
            array_push($right, $elem);
        }
    }
    // echo "\nLeft : " . implode(", ", $left);
    // echo "\nEqual : " . implode(", ", $equal);
    // echo "\nRight : " . implode(", ", $right);
    
    return array_merge($left, $equal, $right);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = quickSort($arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
