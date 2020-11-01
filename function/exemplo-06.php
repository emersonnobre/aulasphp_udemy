<?

//Passagem de parâmetro por referência
$pessoa = array(
    'nome'=>'Emerson',
    'sobrenome'=>'Nobre',
    'idade'=> 18
);

print_r($pessoa);
echo "<br>";

// Colocando o & logo antes da variável, indicamos o endereço original dele, e toda alteração realizada
// na função refletirá na var original.
foreach ($pessoa as $key => &$value){
    if (gettype($value) === 'integer') $value += 12;
    echo $key.": ".$value."<br>";
}

echo json_encode($pessoa);
echo "<br>";
?>