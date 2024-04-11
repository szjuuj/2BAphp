<?php
//comentario simples
#comentario tambem
/*tambem
mas é com mais linhas
*/

$nome ="ju"; #declarando variavel e atribuindo valor tipo string
$sobrenome = "juba"; #decçasramdp varriavel e atribuindo valor tipo string
$idade = "17"; #declarando variavel e atribuindo valor tipo int 
$numero ="22220"; #declarando variavel e atribuindo valor tipo int 
$dia ="22"; #declarando variavel e atribuindo valor tipo int 
$valordia ="80.90"; #declarando variavel e atribuindo valor tipo floar ou double
$salario ; #declarando variavel
$salario = $dia + $valordia; #declarando variavel e acumulando operação com 2 variaveis

echo ("$nome". ("<br>"));
echo ("$sobrenome". ("<br>"));
echo ("$idade". ("<br>"));
echo ("$numero". ("<br>"));

#comando de saida de echo e print
#contatenado string com variaveis

echo("Nome: " .$nome. "<br>");
echo("Sobrenome: ". $sobrenome. "<br>");
echo("Nome Completo: " .$nome. " " . $sobrenome. "<br>");
echo("Idade: " . $idade . "<br>");
print("Dia: " . $dia . "<br>");
print("Valor Dia: " . $dia . "<br>");
print("Salário: R$: " . $salario. "<br");
print("Salário: R$: " . $salario. "<br>");

print("####################################". "<br>");
$a = 20;
$b = 20;
$soma;
$subtracao;
$multiplicacao;
$divisao;

$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;

echo("Soma: " .$soma. "<br>");
echo("Subtração:" .$subtracao. "<br>");
echo("Multiplicação: " .$multiplicacao. "<br>");
echo("Divisão: " .$divisao. "<br>");

print("########################################". "<br>");

var_dump(5);
var_dump("ju");
var_dump(22220);
var_dump(true);
var_dump([2,3,56.0]);
var_dump(NULL);

print("<br>");
print("########################################". "<br>");

var_dump("ju juba". "<br>");
var_dump("Nesta página, compilamos uma tabela de letras minúsculas. Essas cartas não são apenas cópias de letras comuns reduzidas em fonte ou estilos. Esses são caracteres Unicode individuais que têm seu próprio número na tabela de codificação e sua finalidade. As letras escritas acima da linha principal são chamadas sobrescritas ou sobrescritas. E as letras escritas abaixo do texto principal são chamadas de subscrito ou subscrito. Ambos, junto com os símbolos de pequenos números, são usados principalmente para escrever fórmulas matemáticas e químicas. Portanto, se você costuma trabalhar com fórmulas, recomendamos que marque esta página.

Unicode é incrível! Antes de sua introdução, a comunicação internacional era cansativa: todos definiam seu próprio conjunto de caracteres estendido na metade superior do ASCII (chamadas de páginas de código). Isso deu origem a conflitos. Basta pensar que os alemães tiveram que negociar com os coreanos de quem é a página de código. Na tipografia, versaletes são caracteres maiúsculos, mas têm o mesmo tamanho que letras minúsculas (minúsculas) ou formas de texto. Usado na execução de texto para evitar cabeçalhos grandes na página e como um método para destacar o texto junto, em vez de itálico ou quando negrito é impróprio." . "<br>");


echo str_word_count("Nesta página, compilamos uma tabela de letras minúsculas. Essas cartas não são apenas cópias de letras comuns reduzidas em fonte ou estilos. Esses são caracteres Unicode individuais que têm seu próprio número na tabela de codificação e sua finalidade. As letras escritas acima da linha principal são chamadas sobrescritas ou sobrescritas. E as letras escritas abaixo do texto principal são chamadas de subscrito ou subscrito. Ambos, junto com os símbolos de pequenos números, são usados principalmente para escrever fórmulas matemáticas e químicas. Portanto, se você costuma trabalhar com fórmulas, recomendamos que marque esta página.

Unicode é incrível! Antes de sua introdução, a comunicação internacional era cansativa: todos definiam seu próprio conjunto de caracteres estendido na metade superior do ASCII (chamadas de páginas de código). Isso deu origem a conflitos. Basta pensar que os alemães tiveram que negociar com os coreanos de quem é a página de código. Na tipografia, versaletes são caracteres maiúsculos, mas têm o mesmo tamanho que letras minúsculas (minúsculas) ou formas de texto. Usado na execução de texto para evitar cabeçalhos grandes na página e como um método para destacar o texto junto, em vez de itálico ou quando negrito é impróprio.");
?>

