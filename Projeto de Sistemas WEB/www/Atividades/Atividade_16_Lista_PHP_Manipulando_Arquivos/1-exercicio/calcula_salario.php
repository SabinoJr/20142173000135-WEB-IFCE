<?php

$salario = $_POST["salario"];
$valorVendas = $_POST["valor-vendas"];

$salarioTotal = $salario + (0.04 * $valorVendas);

echo "O Salário do vendedor é: R$ " . $salario . ".<br>";
echo "O Valor das Vendas é: R$ " . $valorVendas . ".<br>";
echo "O Salário total do vendedor é: " . $salarioTotal . " reais.";

?>