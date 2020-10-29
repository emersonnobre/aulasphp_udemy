<?

echo "Times:<br>1 - França.<br>2 - Inglaterra<br>3 - Brasil<br>";
$time = 13;

echo "<br/>";

switch ($time) {

    case 1:
        echo "Seu time é a França.";
    break;
    case 2:
        echo "Seu time é a Inglaterra.";
    break;
    case 3:
        echo "Seu time é o Brasil.";
    break;
    default:
    echo "Não listado.";
}

?>