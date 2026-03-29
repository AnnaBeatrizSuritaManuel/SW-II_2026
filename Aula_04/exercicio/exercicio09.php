<?php

function fatorial($n){
    $res = 1;

    for($i = 1; $i <= $n; $i++){
        $res = $res * $i;
    }

    return $res;
}

$r = fatorial(5);

echo $r;

?>