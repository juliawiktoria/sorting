<?php

/*
 * Complete the 'countSwaps' function below.
 *
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function countSwaps($a) {
    // Write your code here
    $numSwaps = 0;
    $firstElement = null;
    $lastElement = null;
    
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a) - 1 - $i; $j++) {
            // echo "a[j]: " . $a[$j] ."\n";
            // echo "a[j+1]: " . $a[$j+1] . "\n";
            if ($a[$j] > $a[$j + 1]) {
                $numSwaps += 1;
                [$a[$j], $a[$j+1]] = [$a[$j+1], $a[$j]];
            };
        };
    };
    
    $firstElement = $a[0];
    $lastElement = $a[count($a) - 1];
    
    echo "Array is sorted in $numSwaps swaps.\nFirst Element: $firstElement\nLast Element: $lastElement";
}

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

countSwaps($a);
