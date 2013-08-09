<?php

//Tipo boleano

$var1 = TRUE;
$var2 = FALSE;

//Tipo inteiro
$var3 = 1;
$var4 = 0;

//Tipo ponto flutuante
$var5 = 2.3;
$var6 = 0.4;

//Tipo string
$var7 = "Ola, isto é uma string PHP";
$teste = 'Pode ser usada estas aspas';
$var8 = "\n Ola, dentro de um string pode conter outros elementos";

//Exemplos

if($var1 == true){
	echo "\n Isto é verdadeiro";
}

if($var1){
	echo "\n Isto também é verdadeiro";
}

if($var1 == $var3){
	echo "\n Isto também";
}

$varTexto = "1";
$varNumero = 1;

if ($varTexto !== $varNumero){
	echo "\n Diferente \n";
}

if($var1 === $var3){
	echo "\n aqui não vai entrar";
}else{
	echo "\n mas aqui vai entrar";
}
echo "\n";
echo $var1;
echo "\n";
echo $var2;
echo "\n";
echo $var3;
echo "\n";
echo $var4;
echo "\n";
echo $var5;
echo "\n";
echo $var6;
echo "\n";
echo $var7;
echo "\n";
echo $var8;
echo "\n";
?>
