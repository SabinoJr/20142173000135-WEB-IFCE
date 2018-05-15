<?php

if (file_exists(filename: "arquivos.txt")) {
	echo "Arquivo existente. <br>";
	echo "Conteúdo do arquivo:<br>";

	$myfile = file(filename: "arquivos.txt");
	echo "$myfile[0]<br>";
	echo "$myfile[1]<br>";
	echo "$myfile[2]<br>";

} else {
	echo "O arquivo não existe.";
}

?>