<?php

function soma($numeros){
    $soma = 0;

    for($i = 0; $i < count($numeros); $i++){
        $soma = $soma + $numeros[$i];
    }

    return $soma;
}

$valores = array(2, 4, 6, 8, 10);

$resultado = soma($valores);

echo $resultado;

?>