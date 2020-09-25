<?php
function PALINDROMO($STR) { 
    if (strlen($STR) == 1) {
        $res = 'true';
    } else {
        $res = 'true';
        $STR_a = str_split($STR);
        for ($i = 0; $i <= strlen($STR)/2; $i++) {
            $temp = array_slice($STR_a, -($i+1));
            if ($temp[0] != $STR_a[$i]) {
                $res = 'false';
                break;
            }
        }
    }
    return $res;
}
?>