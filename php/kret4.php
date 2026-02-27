<?php
$haslo = readline('Wpisz hasło');
function sprawdzSileHasla($haslo) {
    $dlugosc = strlen($haslo);


 if ($dlugosc < 5) {
        return "Bardzo słabe";
    } if ($dlugosc >= 5 && $dlugosc <= 8) {
        return "Słabe";
    } if ($dlugosc >= 9 && $dlugosc <= 11) {
        return "Silne";
    } else {
        return "Bardzo silne";
    }
}

echo 'Siła hasła:' .  sprawdzSileHasla($haslo);
?>