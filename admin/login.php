<?php
    session_start();
 
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">       
    <!-- Scripts -->
    
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>admin-Delirius</title>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <?php unset(

    $_SESSION['id'],
    $_SESSION['name'],
    $_SESSION['email'],
    $_SESSION['nivel_acesso'],
    $_SESSION['user'],
    $_SESSION['password']);
    ?>



  );
    <form class="form-signin" method="POST" action="valida_login.php">
  
  <h1 class="h3 mb-3 font-weight-normal">Admin da Pizzaria</h1>
  <label for="inputUsuario" class="sr-only">Usuario: </label>
  <input type="text" name="user" id="inputUsuario" class="form-control" placeholder="Digite seu Usuario">
  <label for="inputPassword" class="sr-only">Senha</label>
  <input type="password" name="password" class="form-control" placeholder="Digite sua Senha">
  <button class="btn btn-lg btn-primary btn-block" name="btnLogin" type="submit" >acessar</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
  <p class="text-center text-danger"> 
      <?php 
        if(isset($_SESSION['msg_login'])){
            echo $_SESSION['msg_login'];
            unset($_SESSION['msg_login']);
        }
      ?>
</p>

</form>

</body>
</html>