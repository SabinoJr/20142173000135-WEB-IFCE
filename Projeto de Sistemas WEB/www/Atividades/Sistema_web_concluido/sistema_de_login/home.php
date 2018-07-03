<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Cesar Szpak - Celke">
    <link rel="icon" href="imagens/favicon.ico">
    <title>SISGA</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <style>
    .navbar-inverse {
        background-color: #0f6d2c;
        border-color: #0f6d2c;
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
    .content {
    background-color: #eeeeee;
    height: 600px; /* Should be removed. Only for demonstration */
    /*font-family: "Times New Roman", Georgia, Serif;*/
  }

    h1, h5 {
     font-family: "Playfair Display";
    letter-spacing: 3px; 
    text-align: center;
    }
  

    .footer {
    height: 70px;
    background-color: #0f6d2c;
    color: #eeeeee;
    text-align: center;
    }

    
    </style>
  </head>
  <body role="document">
    <!-- Fixed navbar -->
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

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="imagens/logosistema1.gif" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>Programação WEB</h3>
                <p>Desenvolvendo sistemas responsivos</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="imagens/logosistema2.gif" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>Programação WEB</h3>
                <p>Desenvolvendo sistemas responsivos</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="imagens/slide1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>Programação WEB</h3>
                <p>Desenvolvendo sistemas responsivos</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="imagens/slide2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>Programação WEB</h3>
                <p>Desenvolvendo sistemas responsivos</p>
            </div>
          </div>
        </div>
        <div class="item">
           <img class="third-slide" src="imagens/slide3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>Programação WEB</h3>
                <p>Desenvolvendo sistemas responsivos</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<div class="content">
    <h1>OS 4 MOTIVOS DE SE UTILIZAR ESSE SISTEMA</h1>
    <h5>Um Sistema dinâmico intuitivo e ao mesmo tempo Responsivo.</h5>

    <div class="responsive">
    <div class="gallery">
      <img src="imagens/pc1.jpg" width="600" height="400">
    <div class="desc">Gerenciamento das atividades desenvolvidas dentro do almoxarifado e laboratórios no armazenamento e fluxo dos materiais.</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="imagens/pc.png" width="600" height="400">
    <div class="desc">Responsível e adaptável a demais telas de diferentes dispositivos utilizados nos dias atuais.</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="imagens/pc2.png" width="600" height="400">
    <div class="desc">Ganho de tempo nas atividades desenvolvidas dentro do almoxarifado e laboratórios e no processamento dos materiais.</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="imagens/agilidade.jpg" width="600" height="400">
    <div class="desc">Agilidade nas atividades desenvolvidas dentro do almoxarifado e laboratórios e no processamento dos materiais.</div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
  <p style="text-align: justify">Produtos - Cadastro completo de produtos, onde é possível cadastrar tanto produtos consumíveis(produtos consumíveis são produtos que saem do estoque e não voltam mais como por exemplo: papel, tinta para impressora, caneta, etc ) assim como produtos não consumíveis(produtos não consumíveis são produtos que saem do estoque mas obrigatoriamente devem voltar para o estoque em um determinado momento, por exemplo: ferramentas). O cadastro de produtos possui diversos campos para auxiliar no controle do seu almoxarifado, estoque mínimo e estoque máximo, referência (geralmente usado para código do fabricante ou outro código qualquer), campo do código de barras do produto, entre outros.</p>
  
</div>

    </div>

</div>

  <div class="footer">
    <p>Instituto Federal de Educação, Ciência e Tecnologia do Ceará, Campus de Tauá<br>
    Endereço: R. Antônio Teixeira Benevides, 1 - Planalto dos Colibris, Tauá-ceará<br>
    ©Copyright 2018</p>
  </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
