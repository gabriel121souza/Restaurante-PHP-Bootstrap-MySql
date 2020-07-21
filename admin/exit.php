<?php 
    session_start();
    session_destroy();

    //remover todas as informarçoes contidas nas variaveis globais
    unset(
  
      $_SESSION['id'],
      $_SESSION['name'],
      $_SESSION['email'],
      $_SESSION['nivel_acesso'],
      $_SESSION['user'],
      $_SESSION['password']);
      
      header("Location: login.php")
      
      ?>