<?php
$ano = readline('Insira o ano: ');
$ano_n = (int)$ano;
if ($ano_n <= 100) {
    $sec = 1;
} elseif ($ano_n % 100 == 0) {
    $sec = $ano_n/100;
} else {
    $sec = $ano_n/100 + 1;
}
$text = 'Ano '.$ano.' = século '.strval((int)$sec);
echo $text;
?>