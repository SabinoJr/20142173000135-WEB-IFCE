<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Quem somos...</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        body{
          background-color: #eeeeee;
        }
        div.gallery {
          border: 1px solid #ccc;
        }

        div.gallery:hover {
          border: 1px solid #777;
        }

        div.gallery img {
          width: 100%;
          height: auto;
          
        }

        div.desc {
          padding: 15px;
          text-align: center;
        }

      * {
        box-sizing: border-box;
      }

      .responsive {
        padding: 0 6px;
        float: left;
        width: 24.99999%;
        margin-left: 420px;
      }

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}

    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
    .footer {
      height: 70px;
      background-color: #0f6d2c;
      color: #eeeeee;
      text-align: center;
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
        <h1>Quem somos...</h1>
        <h2>SISGCA - Sistema de Gerenciamento e Controle de Almoxarifado</h2>
      </div>

<div class="responsive">
  <div class="gallery">
      <img src="imagens/ifce-logo.jpg" alt="Cinque Terre" width="300" height="200">
    <div class="desc"><b>Logo Institucional</b></div>
  </div>
</div>



<div class="clearfix"></div>

<div style="padding:6px;">
  <p style="text-align: justify">Um sistema desenvolvido para o uso academico e em prol do gerenciamento dos produtos e materiais, como por exemplo: almoxarifado, laboratórios e demais setores pertencentes aos locais do IFCE campus Tauá. Trazendo mais dinamismo e agilidade no cadastramento de materiais e realizando um controle no fluxo de entrada e saída. A diversos materiais que pertecem ao Instituto IFCE, na hora de organizá-los perde muito tempo e isso torna um problema ao local.</p>
  <p style="text-align: justify">Sistema desenvolvido por o aluno Sabino Gonçalves da Silva Júnior estudante de telemática do Instituto Federal de Educação, Ciência e Tecnologia do Ceará, Campus de Tauá.</p>

  <p><b>Endereço:</b>Rua Antônio Teixeira Benevides</p>
  <p><b>Bairro:</b> Planalto dos Colibris</p>
  <p><b>Estado: </b> Ceará</p>
  <p><b>CEP: </b> 63660-000</p>
  <p><b>Telefone: </b> (88) 3437-4249</p>
  <p><b>Horário de funcionamento: </b> Segunda a sexta · 07:30–19:30</p>
</div>

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