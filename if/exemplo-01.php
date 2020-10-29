<?php

$minha_idade = 15;
$idade_crianca = 12;
$idade_maior = 18;
$idade_melhor = 65;

if ($minha_idade < $idade_crianca) {
    echo "<p>É uma criança.</p>";
} else if ($minha_idade < $idade_maior) {
    echo "<p>É um adolescente.</p>";
} else if ($minha_idade < $idade_melhor) {
    echo "<p>É um adulto.</p>";
} else {
    echo "<p>É um idoso.</p>";
}

echo "<br/>";

//-----OPERADOR TERNÁRIO------//
//Condições simples.  echo (condição)?"verdadeiro":"falso";
echo ($minha_idade < $idade_maior)?"<p>Menor de idade.</p>":"<p>Maior de idade.</p>";

?>