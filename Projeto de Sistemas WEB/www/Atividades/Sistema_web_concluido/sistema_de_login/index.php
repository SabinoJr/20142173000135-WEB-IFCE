<?php
	include_once("conexao.php");
	$result_cursos = "SELECT * FROM materiais";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<?php
		ob_start();
			session_start();
			if(!empty($_SESSION['id'])){
			echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
			echo "<a href='sair.php'>Sair</a>";
		}else{
			$_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
			header("Location: login.php");	
		}
		?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Modal</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
			.navbar-inverse {
        background-color: #0f6d2c;
        border-color: #0f6d2c;
        }
       .navbar-inverse .navbar-nav>li>a{
          color: #fff;
        }
        .navbar-inverse .navbar-brand{
          color: #fff;
        }
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">SISGA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="login.php">Logar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
	
    <?php
		echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
		echo "<a class = 'btn btn-success' href='sair.php'>Sair</a>";
    ?> 	
				<h1>Sistema de Gerenciamento de Almoxarifado e Controle de Patrimônio</h1>
				<h3>Lista de Materiais</h3>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcad">Cadastrar</button>
			</div>
			<!-- Inicio Modal -->
			<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title text-center" id="myModalLabel">Cadastrar Materiais</h4>
						</div>
						<div class="modal-body">
							<form method="POST" action="http://localhost/Sistema_web/sistema_de_login/processa_cad.php" enctype="multipart/form-data">
								<div class="form-group">
									<label for="recipient-name" class="control-label">Nome do Material:</label>
									<input name="nomedomaterial" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label for="recipient-name" class="control-label">Quantidade:</label>
									<input name="quantidade" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label for="message-text" class="control-label">Detalhes:</label>
									<textarea name="detalhes" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label for="recipient-name" class="control-label">Setor:</label>
									<input name="setor" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label for="recipient-name" class="control-label">Data de cadastro:</label>
									<input name="datadecadastro" type="date" class="form-control">
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Cadastrar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Fim Modal -->
			
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nome do Material</th>
								<th>Quantidade</th>
								<th>Detalhes</th>								
								<th>Setor</th>
								<th>Data de Cadastro</th>
								<th>Ação</th>

							</tr>
						</thead>
						<tbody>
							<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
								<tr>
									<td><?php echo $rows_cursos['id']; ?></td>
									<td><?php echo $rows_cursos['nomedomaterial']; ?></td>
									<td><?php echo $rows_cursos['quantidade']; ?></td>
									<td><?php echo $rows_cursos['detalhes']; ?></td>
									<td><?php echo $rows_cursos['setor']; ?></td>
									<td><?php echo $rows_cursos['datadecadastro']; ?></td>
									<td>
										<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_cursos['id'];?>">Visualizar</button>
										
										<button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" 
										data-whatever="<?php echo $rows_cursos['id']; ?>" 
										data-whatevernomedomaterial="<?php echo $rows_cursos['nomedomaterial']; ?> "
										data-whateverquantidade="<?php echo $rows_cursos['quantidade']; ?>"
										data-whateverdetalhes="<?php echo $rows_cursos['detalhes']; ?>"
										data-whateversetor="<?php echo $rows_cursos['setor']; ?>"
										data-whateverdatadecadastro="<?php echo $rows_cursos['datadecadastro']; ?>">Editar</button>
										
										<a href="processa_apagar.php?id=<?php echo $rows_cursos['id']; ?>"><button type="button" class="btn btn-xs btn-danger">Apagar</button></a>
									</td>
								</tr>
								<!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $rows_cursos['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_cursos['nomedomaterial']; 
													echo $rows_cursos['quantidade'];
													echo $rows_cursos['detalhes'];
													echo $rows_cursos['setor'];
													echo $rows_cursos['datadecadastro'];?></h4>
													
													
											</div>
											<div class="modal-body">
												<p><?php echo $rows_cursos['id']; ?></p>
												<p><?php echo $rows_cursos['nomedomaterial']; ?></p>
												<p><?php echo $rows_cursos['quantidade']; ?></p>
												<p><?php echo $rows_cursos['detalhes']; ?></p>
												<p><?php echo $rows_cursos['setor']; ?></p>
												<p><?php echo $rows_cursos['datadecadastro']; ?></p>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>		
		</div>
		
		
	
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="exampleModalLabel">Materiais</h4>
					</div>
					<div class="modal-body">
						<form method="POST" action="http://localhost/Sistema_web/sistema_de_login/processa.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="recipient-name" class="control-label">Nome do Material:</label>
								<input name="nomedomaterial" type="text" class="form-control" id="recipient-name">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="control-label">Quantidade:</label>
								<input name="quantidade" type="text" class="form-control" id="recipient-quantidade">
							</div>
							<div class="form-group">
								<label for="message-text" class="control-label">Detalhes:</label>
								<textarea name="detalhes" class="form-control" id="recipient-detalhes"></textarea>
							<div class="form-group">
								<label for="recipient-name" class="control-label">Setor:</label>
								<input name="setor" type="text" class="form-control" id="recipient-setor">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="control-label">Data de Cadastro:</label>
								<input name="datadecadastro" type="date" class="form-control" id="recipient-datadecadastro">
							</div>
							</div>
							<input name="id" type="hidden" id="id_curso">
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-danger">Alterar</button>
							</div>
						</form>
					</div>			  
				</div>
			</div>
		</div>
	
		
		

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$('#exampleModal').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget); // Button that triggered the modal
				var recipient = button.data('whatever'); // Extract info from data-* attributes
				var recipientnomedomaterial = button.data('whatevernomedomaterial');
				var recipientquantidade = button.data('whateverquantidade');
				var recipientdetalhes = button.data('whateverdetalhes');
				var recipientsetor = button.data('whateversetor');
				var recipientdatadecadastro = button.data('whateverdatadecadastro');
				console.log(button.data('whateversetor'));
				// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
				var modal = $(this);
				modal.find('.modal-title').text('ID do Curso: ' + recipient);
				modal.find('#id_curso').val(recipient);
				modal.find('#recipient-name').val(recipientnomedomaterial);
				modal.find('#recipient-quantidade').val(recipientquantidade);
				modal.find('#recipient-detalhes').val(recipientdetalhes);
				modal.find('#recipient-setor').val(recipientsetor);
				modal.find('#recipient-datadecadastro').val(recipientdatadecadastro);
			})
		</script>
	</body>
</html>