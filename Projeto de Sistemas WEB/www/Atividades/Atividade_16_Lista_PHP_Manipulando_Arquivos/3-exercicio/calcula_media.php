<?php

$nomeAluno = $_POST["nomeAluno"];
$disciplina = $_POST["disciplina"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

echo "O Nome do Aluno é: " . $nomeAluno . ".<br>";
echo "A Disciplina é: " . $disciplina . " .<br>";
echo "As Notas do Aluno é:<br>" . "Nota 1: " . $nota1. ", nota 2: " . $nota2 . ", e nota 3: " . $nota3;

function calculaMedia($n1, $n2, $n3){
	return $media = ($n1 + $n2 + $n3) / 3;
}

$notafinal = calculaMedia($nota1,$nota3,$nota3);

if ($notafinal >= 7) {
	echo "<br>O aluno " . $nomeAluno . " Está aprovado com média " . $notafinal;
}else{
	echo "<br> O aluno " . $nomeAluno . " Está reprovado com média " . $notafinal;
}



?>