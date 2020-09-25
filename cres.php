<?php
function SequenciaCrescente($array) { 
    if (count($array) < 3) {
        $res = 'true';
    } else {
        $res = 'true';
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i+1] <= $array[$i]) {
                if ($i == 0 && $array[$i] == max($array)) {
                    \array_splice($array, $i, 1);
                } else {
                    \array_splice($array, $i+1, 1);
                }
                for ($j = $i; $j < count($array); $j++) {
                    if ($j == count($array) - 1)break;
                    if ($array[$j+1] <= $array[$j]) {
                        $res = 'false';
                        break;
                    }
                }
                break;
            }
        }
    }
    return $res;
}
?>