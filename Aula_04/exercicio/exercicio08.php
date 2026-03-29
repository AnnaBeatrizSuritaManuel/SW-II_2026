<?php
function gerarNumeros() {
    $numeros = [];

    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(1, 100);
    }

    return $numeros;
}

$resultado = gerarNumeros();

foreach ($resultado as $num) {
    echo $num . "<br>";
}
?>