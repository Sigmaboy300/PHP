Napisz program, który odpowiada na pytanie, czy wśród trzech liczb są choć dwie takie same.


<?php
$liczba1 = readline("Podaj liczbę:");
$liczba2 = readline("Podaj liczbę:");
$liczba3 = readline("Podaj liczbę:");



if ($liczba1 == $liczba2 ) {
    echo "1 i 2 liczba jest taka sama  ";
}
elseif ($liczba1 == $liczba3) {
    echo "1 i 3 liczba jest taka sama";
}
elseif ($liczba2 == $liczba3) {
    echo "2 i 3 liczba jest taka sama";
}
else {
    echo "nie ma tych samych liczb";
}
?>