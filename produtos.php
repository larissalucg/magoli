<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Magoli Art!</title>

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/base.css" rel="stylesheet">

    <style type="text/css">
      .thumbnail > img {
        height: 230px !important;
        width: 340px;
      }
    </style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">MagOli Art</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse font-menu" >
              <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li class="dropdown active"><a href="produtos.php">Produtos</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="admin/lista-de-produtos.php">Administrador</a></li>
            
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


       <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="imagens/01.jpg" alt="imagens/01.jpg">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="imagens/02.jpg" alt="imagens/02.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="titulo-slide"> 
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="imagens/17.jpg" alt="imagens/17.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="titulo-slide">
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


      <!--Estrutura 
       ==================================================-->
      <div class="container-fluid">
        <div class="row">

          <?php
           include "admin/conexao.php";
           $sql = "select * from produtos";
           $produtos = mysqli_query($conex,$sql);
           while($produto = mysqli_fetch_array($produtos)) { 
          ?>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src=<?php echo $produto['imagem'] ?>   class="img-responsive">
                <div class="caption text-center">
                  <h3><?php echo $produto['nome'] ?> </h3>
                  <p><?php echo $produto['descricao'] ?></p>
                </div>
            </div>
          </div>

          <?php }
            mysqli_free_result($produtos);
            mysqli_close($conex);
          ?>

          </div>
          
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Voltar ao inicio da página</a></p>
        <p>&copy; 2017 Magoli Art. &middot; </p>
      </footer>

        </div>
      </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>
