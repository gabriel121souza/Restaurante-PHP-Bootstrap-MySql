<?php 
    session_start();
    include_once('seguranca.php');
    include_once('../conexao/conexao.php');
   
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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body role="document">

  
  <?php
        include_once("menu_admin.php");
        $result_manager = " SELECT * FROM managers ";
        $resultado_manager = mysqli_query($conn, $result_manager); 
  ?>
    <div class="container theme-showcase" role="main">

   
      <div class="page-header">
      <br><br>
      <?php if(isset($_SESSION['msg'])){ ?>
        <div class="alert alert-success" role="alert">
          <?php echo $_SESSION['msg']; ?>            
        </div>

          <?php
            unset($_SESSION['msg']);
        }
    ?>
        <h1>Lista de Usuarios</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Usuario</th>
                <th>Senha</th>
                <th>Data de criação</th>
                <th>Ações</th>
              </tr>
            </thead>
            <?php while($rows_manager = mysqli_fetch_assoc($resultado_manager)){ ?>
            <tbody>
              <tr>
                <td><?php echo $rows_manager['id'];?></td>
                <td><?php echo $rows_manager['name'];?></td>
                <td><?php echo $rows_manager['email']; ?></td>
                <td><?php echo $rows_manager['user']; ?></td>
                <td><?php echo $rows_manager['password']; ?></td>
                <td> <?php echo $rows_manager['created']; ?> </td>
                <td> 
                  <div class="btn-group" role="group" aria-label="Exemplo básico">
                     <?php echo"<a type='button' class='btn btn-primary' style='margin:5px;color:white;' href='manager/edit_user.php?id=" . $rows_manager['id']."'>editar</a>"?>
                    <?php echo "<a type='button' class='btn btn-danger' style='margin:5px; color:white;' href='manager/proc_delete_user.php?id=". $rows_manager['id']. "'>Apagar</a>"?>
                  </div>
                </td>
                
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
          </table>
        </div>
        
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
