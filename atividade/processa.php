<?php

$textoParagrafo = $_POST["texto_paragrafo"];
$textoLista = $_POST["texto_lista"];
$qParagrafos = $_POST["qtd_paragrafos"];
$qItens = $_POST["qtd_itens"];

if ($qParagrafos < 1 || $qParagrafos > 20) {
    echo "Erro: quantidade de parágrafos inválida!";
    exit;
}

if ($qItens < 1 || $qItens > 50) {
    echo "Erro: quantidade de itens inválida!";
    exit;
}

if ($qParagrafos > 10) {
    echo "<p><b>Muitos parágrafos gerados!</b></p>";
}

if ($qItens > 30) {
    echo "<p><b>Lista extensa!</b></p>";
}

for ($i = 1; $i <= $qParagrafos; $i++) {
    echo "<p>$textoParagrafo $i</p>";
}

echo "<ul>";

for ($i = 1; $i <= $qItens; $i++) {
    echo "<li>$textoLista $i</li>";
}

echo "</ul>";

?>