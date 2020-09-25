<?php
function CalculaArea($num) { 
    $quads = 0;
    $add = 1;
    for ($i = 1; $i <= $num*2 - 1; $i++) {
        $quads += $add;
        if ($i < $num) {
            $add += 2;
        } else {
            $add -= 2;
        }
    }
    return $quads;
}
?>