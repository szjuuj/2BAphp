<?php
$favcolor = "blue";

switch ($favcolor) {
        case "red":
        echo "Your color is Red!";
        break;

        case "blue":
        echo "Your color is Blue!";
        break;

        case "green":
        echo "Your color is Greem!";
        break;
        
    default:
        echo "Your favorite color is neither red,blue, nor green!";
        }
echo "##################################################";
echo "<br>";
if (5 > 3) { //maior
    echo "cleitinho adverte: 5 é maior que 3!!!";
}

echo "<br>";
echo "##################################################";
echo "<br>";
$t = 14;
if ($t = 20) { //diferente
    echo "t é diferente de vinte";
} else { //senao
    echo "t não é igual a vinte!";
}

date_default_timezone_set('America/Sao_Paulo'); 

echo "<br>";
echo "##################################################";
echo "<br>";

$y = date("H:i:s");
echo ("$y");

echo ("<br>");
$y= date("d-m-y  h:i:s");
echo ("$y");

echo ("<br>");

$y = date(" D M j G:i:s T Y");
echo ("$y");

echo("<br>");
echo "##################################################";
echo "<br>";

if($y < "19"){
    echo "Bom dia!";
} else {
    echo "Boa noite!";
}

// + adiçao
// - subtraçao
// * multiplicacao
// / divisao
// % resto de divisao
// ** exponencial

// == igualdade
// === identico
// != nao é igual
// <> nao é igual
// !== nao é identico
// > maior que
// < menor que
// >= maior ou igual
// <= menor ou igual
// <=>
?>