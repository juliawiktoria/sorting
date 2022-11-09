<?php

    function partition($ar) {
        $pivot = $ar[0];
        $left = $equal = $right = [];

        foreach ($ar as $elem) {
            if ($elem < $pivot) {
                array_push($left, $elem);
            } elseif ($elem == $pivot) {
                array_push($equal, $elem);
            } else {
                array_push($right, $elem);
            }
        }
        return [$left, $equal, $right];
    }

    function quickSort($ar) {
        if (count($ar) <= 1) {
            return $ar;
        }
        
        //get partiotions
        $parts = partition($ar);
        $left = $parts[0];
        $equal = $parts[1];
        $right = $parts[2];
        $merged = array_merge(quickSort($left), $equal, quickSort($right));
        echo implode(" ", $merged) . "\n";
        
        return $merged;
    }

    $fp = fopen("php://stdin", "r");

    fscanf($fp, "%d", $m);

    $ar = explode(' ', trim(fgets($fp)));
    
    quickSort($ar);

?>
