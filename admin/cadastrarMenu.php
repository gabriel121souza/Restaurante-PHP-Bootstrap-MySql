<?php
    session_start();
    include_once("seguranca.php");
    include_once("../conexao/conexao.php");


?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/theme/">

    <title>Delirius admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

  <?php

  include_once("menu_admin.php");

  ?>
    
<div class="container theme-showcase" role="main">
<br>
<br>

    <?php
        if(isset($_SESSION['msg'])){ ?>
           <div class="alert alert-danger" role="alert"> 
           <?php echo $_SESSION['msg'];?>
           </div> 
           <?php unset($_SESSION['msg']);
        }
    ?>

    <div class="page-header">
        <form method="POST" action="menu/proce_cad_menu.php" enctype="multipart/form-data">
           
            <div class="form-group">
                <label>Nome </label>
                <input type="text" name="name" class="form-control" placeholder="Digite o nome do prato" required> 
            
            <div class="form-group">
                <label for="inputEstado">Categoria</label>
                    <select id="inputEstado" class="form-control" name="category">
                        <option selected  name="pizza" value="Pizza">Pizza</option>
                        <option name="hamburguer" value="Hamburguer">Hamburguer</option>
                        <option name="Bebibas" value="bebidas">Bebidas</option>
                    </select>
            </div>
            <div class="form-group">
                <label>Preco</label>
                <input type="text" name="price" class="form-control" placeholder="digite o preco sem ." required>
            </div>
    
            <div class="mb-3">
                <label for="validationTextarea">Descricao</label>
                <textarea class="form-control is-invalid" name="description" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                <div class="invalid-feedback">
                faça um resumo do prato.
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    Imagem <span style="color:red">*</span><input type="file" name="img1" required>
                </div>  
           </div>
            <input type="submit"  name="btn-cad" class="btn btn-primary" value="Cadastrar">
        </form>


    </div>
     
</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
