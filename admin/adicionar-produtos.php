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
              <a class="navbar-brand" href="lista-de-produtos.php">MagOli Art</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse font-menu" >
              <ul class="nav navbar-nav">
                <li class="active"><a href="lista-de-produtos.php">Home</a></li>
  
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="titulo-grande-vermelho">Cadastre um Novo Produto!</h2>
          <form action="insere-produtos-banco.php" method="POST">
              <div class="form-group">
                <label for="exampleInputFile">Nome do Produto</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="nome">
              </div>
             <div class="form-group" >
               <label for="exampleInputFile">Descrição</label>
               <input type="text" name="descricao" class="form-control" id="descricao" placeholder="descricao">
             </div>
             <div class="form-group" >
               <label for="exampleInputFile">Preço</label>
               <input type="text" name="preco" class="form-control" id="preco" placeholder="preco">
             </div>
             <div class="form-group">
               <label for="exampleInputFile">Imagem</label>
               <input type="text" name="imagem" class="form-control" id="imagem" placeholder="imagem">
            </div>  
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
        </div>

      </div><!-- /.row -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Voltar ao inicio da página</a></p>
        <p>&copy; 2017 Magoli Art. &middot; </p>
      </footer>

    </div><!-- /.container -->


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
