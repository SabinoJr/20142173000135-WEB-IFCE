<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript">
			function validar_form_contato(){
				var nome = formcontato.nome.value;
				var email = formcontato.email.value;
				var assunto = formcontato.assunto.value;
				var mensagem = formcontato.mensagem.value;
				
				if(nome == ""){
					alert("Campo nome é obrigatorio");
					formcontato.nome.focus();
					return false;
				}if(email == ""){
					alert("Campo email é obrigatorio");
					formcontato.email.focus();
					return false;
				}if(assunto == ""){
					alert("Campo assunto é obrigatorio");
					formcontato.assunto.focus();
					return false;
				}if(mensagem == ""){
					alert("Campo mensagem é obrigatorio");
					formcontato.mensagem.focus();
					return false;
				}
			}
		</script>
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
        body{
        	background-color: #eeeeee;
        }
        .footer {
    		height: 70px;
    		width: 1360px;
    		background-color: #0f6d2c;
    		color: #eeeeee;
    		text-align: center;
    		margin-top: 125px;
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
    <br><br>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Pagina de Contato</h1>
			</div>
			<form class="form-horizontal" name="formcontato" method="POST" action="salva_mensagem.php">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Nome: 
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						E-mail: 
					</label>
					<div class="col-sm-10">
						 <input type="email" class="form-control" name="email" placeholder="Seu e-mail" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Assunto: 
					</label>
					<div class="col-sm-10">
						 <input type="text" class="form-control" name="assunto" placeholder="Assunto do contato" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Mensagem: 
					</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="mensagem" placeholder="Mensagem"></textarea>
					</div>
				</div>
				
				<input class="btn btn-success" type="submit" value="Enviar" onclick="return validar_form_contato()">
			</form>
		</div>

	<div class="footer">
    <p>Instituto Federal de Educação, Ciência e Tecnologia do Ceará, Campus de Tauá<br>
    Endereço: R. Antônio Teixeira Benevides, 1 - Planalto dos Colibris, Tauá-ceará<br>
    ©Copyright 2018</p>
  </div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>