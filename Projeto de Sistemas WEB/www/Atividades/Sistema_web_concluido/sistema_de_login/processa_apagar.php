<?php
	include_once("conexao.php");
	
	$id = $_GET['id'];
	
	$result_cursos = "DELETE FROM materiais WHERE id = '$id'";
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
					alert(\"Material removido com sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Sistema_web/sistema_de_login/index.php'>
				<script type=\"text/javascript\">
					alert(\"Material não foi removido com sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>