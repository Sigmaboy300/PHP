<?php
$liczba1 = readline("Podaj pierwszą liczbę: ");
$liczba2 = readline("Podaj drugą liczbę: ");
$liczba3 = readline("Podaj trzecią liczbę: ");

if ($liczba1 <= $liczba2 && $liczba1 <= $liczba3) {
    echo "Najmniejsza jest liczba 1: $liczba1";
} 
elseif ($liczba2 <= $liczba1 && $liczba2 <= $liczba3) {
    echo "Najmniejsza jest liczba 2: $liczba2";
} 
else {
    echo "Najmniejsza jest liczba 3: $liczba3";
}
?>