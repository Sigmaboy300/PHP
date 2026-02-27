<?php
$liczba1 = readline("Podaj liczbę 1: ");
$liczba2 = readline("Podaj liczbę 2: ");

if ($liczba2 != 0 && $liczba1 % $liczba2 == 0   ) {
    echo "Dzieli sie";
} else {
    echo "niedzieli sie";
}
?>