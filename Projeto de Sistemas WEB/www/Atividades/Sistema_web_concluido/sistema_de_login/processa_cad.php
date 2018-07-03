<?php
	include_once("conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$nomedomaterial = mysqli_real_escape_string($conn, $_POST['nomedomaterial']);
	$quantidade = mysqli_real_escape_string($conn, $_POST['quantidade']);
	$detalhes = mysqli_real_escape_string($conn, $_POST['detalhes']);
	$setor = mysqli_real_escape_string($conn, $_POST['setor']);
	$datadecadastro = mysqli_real_escape_string($conn, $_POST['datadecadastro']);
	
	$result_cursos = "INSERT INTO materiais (id, nomedomaterial, quantidade, detalhes, setor, datadecadastro) VALUES ('$id', '$nomedomaterial', '$quantidade', '$detalhes', '$setor', 
		'$datadecadastro')";	
	$resultado_cursos = mysqli_query($conn, $result_cursos);	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Sistema_web/sistema_de_login/index.php'>
				<script type=\"text/javascript\">
					alert(\"Material Cadastrado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Sistema_web/sistema_de_login/index.php'>
				<script type=\"text/javascript\">
					alert(\"Material não foi cadastrado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>