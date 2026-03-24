<?php
   //função sem parâmetros e com retorno

   function exibe_msg(){
    $x = 12;
    return $x;
   }

   $abc = exibe_msg();

   echo $abc*2;
?>