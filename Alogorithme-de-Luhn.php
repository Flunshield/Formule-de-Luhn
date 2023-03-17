<?php

$number = "824264048";

function algoLuhn ($number) {
    $totalAmountnumber = 0;
    if (is_int($number)) {
        $number = strval($number);
    }

    $numberReverse = strrev($number);
    for($i = 0; $i < strlen($numberReverse); $i++) {
        $charAsNumber = (int)$numberReverse[$i];
        if(($i+1) % 2 === 0) {
            $charAsNumber = $charAsNumber*2;
            if($charAsNumber>10) {
                $unit = substr($charAsNumber,-1);
                $tens = substr($charAsNumber, -2, 1);
                $numberReverse[$i] = (string)($unit + $tenOrSo);
            } else {
                $numberReverse[$i] = (string)($charAsNumber);
            }
        }
        $totalAmountnumber = $totalAmountnumber + $numberReverse[$i];
    }
    return $totalAmountnumber % 10 === 0;
}
