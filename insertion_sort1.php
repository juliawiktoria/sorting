<?php

/*
 * Complete the 'insertionSort1' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY arr
 */

function insertionSort1($n, $arr) {
    // length is n, last index is n - 1
    $current = $arr[$n - 1];
    $inserted = False;
    // echo "Current value is $current\n";
    
    // initialise for loop to go over array elements
    // from second-to-last element (arr[n-1-1]) to the first element (arr[0])
    for ($i = $n - 2; $i >= 0; $i--) {
        // echo "Checking element $arr[$i] at ind $i vs. $current.\n";
        
        if ($arr[$i] < $current) {
            // update elem on index i with the current value
            $arr[$i + 1] = $current;
            $inserted = True;
            // print the current state of the array after checking conditions
            echo implode(' ', $arr) . "\n";
            break;
        } else {
            // copy value from index i to index i+1
            $arr[$i + 1] = $arr[$i];
            // print the current state of the array after checking conditions
            echo implode(' ', $arr) . "\n";
        }
    }
    // if the for loop passed and there was no insertion then the current
    // is inserted on the first position
    if (!$inserted) {
        $arr[0] = $current;
        // print the current state of the array after checking conditions
        echo implode(' ', $arr) . "\n";
    }
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1($n, $arr);
