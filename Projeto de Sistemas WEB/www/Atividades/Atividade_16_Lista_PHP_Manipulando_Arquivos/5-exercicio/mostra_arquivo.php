<?php

if (file_exists(filename "arquivo.txt")) {
	echo "O conteúdo do Arquivo é: <br>";
	fopen(filename "arquivo.txt", "a");
	$leitura = file(filename "arquivo.txt");
	echo file_get_contents(filename "arquivo.txt");
}else{
	echo "Arquivo Inexistente!";
}

?>