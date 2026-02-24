<?php
    $a = 10;
    $b = 5;
    $soma = $a + $b;
    echo "A soma é: $soma";
    echo "<hr>";

    // Estruturas condicionais
    //IF

    if($b > $a) {
        echo "B é maior que A";
    } else {
        echo "B não é maior que A";
    }

    echo "<hr>";

    $n1 = 4;
    $n2 = 5;
    $n3 = 6;

    $media = ($n1 + $n2 + $n3) / 3;

    echo "Sua média é: $media <br>";
    if ($media > 5) {
        echo "Aprovado";
    } else {
        if ($media < 4) {
           echo "Reprovado";
        } else {
           echo "Recuperação";
        }
    }

    echo "<hr>";

    $dia = 2;

    switch ($dia) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda";
            break;
        case 3:
            echo "Terça";
            break;
        case 4:
            echo "Quarta";
            break;
        case 5:
            echo "Quinta";
            break;
        case 6:
            echo "Sexta";
            break;
        case 7:
            echo "Sabado";
            break;
        default:
         echo "Número inválido";
            break;
    }

    echo "<hr>";

    for ($i=1; $i <= 10; $i++) { 
        echo "$i - ";
    }

    echo "<hr>";


    $a = 1;
    while ($a <= 10) {
        echo "$a - ";
        $a++;
    }

    echo "<hr>";

    $x = 1;
    do {
        echo "$x - ";
        $x++;
    } while ($x <= 10);

    echo "<hr>";

    $nomes = ['isabele', 'angelo', 'anna', "pedro"];
    //echo $nomes[1];

    $qtde = count($nomes);

    echo $nomes[0];
    echo "<br>";
    echo $nomes[1];
    echo "<br>";
    echo $nomes[2];
    echo "<br>";


   // for ($n=0; $n <= $qtde-1 ; $n++) { 
   //     echo $nomes[$n]. "<br>";
   // }

   echo "<hr>";

   foreach ($nomes as $nome) {
    echo "$nome <br>";
   }
?>