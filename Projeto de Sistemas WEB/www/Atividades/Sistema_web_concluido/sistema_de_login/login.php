<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sistema de Login</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
		<style>
      	.navbar-inverse {
        	background-color: #0f6d2c;
        	border-color: #0f6d2c;
        }
        .footer {
    		height: 70px;
    		background-color: #0f6d2c;
    		color: #eeeeee;
    		text-align: center;
    		margin-top: 70px;
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
		<div class="container">
			<div class="form-signin" style="background: #42dea4;">
				<h2 class="text-center">Área restrita</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
				<form method="POST" action="valida.php">
					<!--<label>Usuário</label>-->
					<input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control"><br>
					
					<!--<label>Senha</label>-->
					<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>
					
					<input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block">
					
					<div class="row text-center" style="margin-top: 20px;"> 
						<h4>Você ainda não possui uma conta?</h4>
						<a href="cadastrar.php">Crie grátis</a>
					</div>

					
				</form>
			</div>
			<br>
  				
  				<p style="color:#c09853; text-align: center;"><b>Atenção!</b> <br>Usuário - Login e senha
  					<br/>
  						Caso contrário - Erro ao efetuar Login</p>
  				 		
		</div>
		
		<div class="footer">
    <p>Instituto Federal de Educação, Ciência e Tecnologia do Ceará, Campus de Tauá<br>
    Endereço: R. Antônio Teixeira Benevides, 1 - Planalto dos Colibris, Tauá-ceará<br>
    ©Copyright 2018</p>
  </div>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>