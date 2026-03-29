<?php

function fazerTabuada($n){
    $resultado = "";

    for($i = 1; $i <= 10; $i++){
        $resultado .= $n * $i . "<br>";
    }

    return $resultado;
}

$r = fazerTabuada(2);

echo $r;

?>