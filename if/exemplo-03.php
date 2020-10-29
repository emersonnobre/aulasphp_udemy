<?

$meu_salario = 5000;
$salario_medio = 1200;
$salario_alto = 2400;

if ($meu_salario < $salario_medio) {
    echo "<p>Meu salário é baixo.</p>";
} else if ($meu_salario < $salario_alto) {
    echo "<p>Meu salário é médio.</p>";
} else {
    echo "<p>Meu salário é alto.</p>";
}
?>