<?php

$arquivoWeb = "arquivos.txt";

$text1 = "Primeira frase do arquivo.";
$text2 = "Segunda frase do arquivo.";
$text3 = "Terceira frase do arquivo.";

echo "Verificando se há algum arquivo.<br>";

if (file_exists($arquivoWeb)){
	echo "Existe um arquivo e ele será aberto.<br>";
	fopen($arquivoWeb, "a");
}else{
	echo "Não existe nenhum arquivo.<br>";
	echo "Mas será criado.<br>";
	fopen($arquivoWeb, "w");
	echo "Arquivo criado.<br>";
}


$gravar = fopen($arquivoWeb, "w");

fwrite($gravar, "$text1 \n");
fwrite($gravar, "$text2 \n");
fwrite($gravar, "$text3 \n");

fclose($gravar);
echo "Três frases foram escritas no arquivo.";


if(file_exists("arquivos.txt")){
	echo "Arquivo existente. <br>";
	echo "Conteúdo do arquivo";

	$myfile = file("arquivos.txt");
	echo "$myfile[0]<br>";
	echo "$myfile[1]<br>";
	echo "$myfile[2]<br>";

}else{
	echo "O arquivo não existe";
}

?>