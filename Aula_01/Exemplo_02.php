<?php
   $nome = "Anderson";
   $idade = 25;
   $preco = 10.50;
   $ativo = true;
   echo "Nome: " . $nome . "<br>";
   echo "Idade: " . $idade . "<br>";
   echo "Preço: R$ " . $preco . "<br>";
   echo "Status: " . ($ativo ? "Ativo" : "inativo");
?>