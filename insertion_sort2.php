<?php

/*
 * Complete the 'insertionSort2' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY arr
 */

function insertionSort2($n, $arr) {
    // handle the base case where there is only 1 element
    if ($n <= 1) {
        echo implode(" ", $arr);
        return;
    }
    
    for ($i = 1; $i <= $n - 1; $i++) {
        $current = $arr[$i];
        // echo "Checking val $current at ind $i agains lower indices.\n";
        
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($arr[$j] < $current) {
                // echo "$current is LARGER than $arr[$j]\n";
                break;
            } else {
                // echo "$current is SMALLER than $arr[$j]\n";
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $current;
            }
        }
        echo implode(" ", $arr) . "\n";
    }
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort2($n, $arr);
