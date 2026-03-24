<?php
function divisao($x){
    $resultado = $x % 2;

    if ($resultado == 0) {
        echo "par <br>";
    } else {
        echo "impar <br>";
    }
}

$n1 = 5;

divisao($n1);
?>