<?php
function SeculoAno($ano) { 
    $ano_n = (int)$ano;
    if ($ano_n % 100 == 0) {
        $sec = $ano_n/100;
    } else {
        $sec = $ano_n/100 + 1;
    }
    return (int)$sec;
}
?>