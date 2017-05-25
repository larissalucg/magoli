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
                <li class="active"><a href="novo-site/index.html">Voltar para o Site</a></li>
  
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>


    <div id="top" class="row">
    <div class="col-md-6">
        <h2>Itens</h2>
    </div>

    <div class="col-md-6">
        <a href="adicionar-produtos.php" class="btn btn-primary pull-right h2">Novo Item</a>
    </div>
</div>

<div id="list" class="row">

 
    <div class="table-responsive col-md-12">
        
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>

                  <div class="mensagem">

                  
                       <?php
                         include "conexao.php";
                         $sql = "select * from produtos";
                         $produtos = mysqli_query($conex,$sql);
                         while($produto = mysqli_fetch_array($produtos)) { 
                        ?>

                      <tr>
                      <td><?php echo $produto['id'] ?></td>
                      <td><?php echo $produto['nome'] ?></td>
                      <td><?php echo $produto['descricao'] ?></td>
                      <td><?php echo $produto['preco'] ?></td>
                      <td><?php echo $produto['imagem'] ?></td>
                      <td class="actions">
                        <a class="btn btn-success btn-xs" href='visualiza-produtos.php?&id=<?php echo $produto['id']; ?>'>Visualizar</a>
                        <a class="btn btn-warning btn-xs" href='alterar-produto.php?&id=<?php echo $produto['id']; ?>'>Editar</a> 
                        <a id="<?php echo $produto['id']; ?>" class="btn btn-danger btn-xs"  href="excluir-produtos.php?&id=<?php echo $produto['id']; ?>" data-toggle="modal" data-target="#delete-modal" onclick="confirmaExcluir(this.id)">Excluir</a>
                    </td>
                    </tr>
                      <?php }
                      mysqli_free_result($produtos);
                      mysqli_close($conex);
                    ?>

                 </tr>
            </thead>
         </table>
 
     </div>
 </div> 


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

 <script>
      function confirmaExcluir(id) {
        if (confirm("Tem certeza?")){
          location.href='excluir-produtos.php?&id='+id;
        }
      }
    </script>
</html>
