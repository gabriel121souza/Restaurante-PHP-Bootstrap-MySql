<?php
//tirar o espaco
    ob_start();

    if(($_SESSION['id']=="") || ($_SESSION['user']=="") || ($_SESSION['name']=="") || ($_SESSION['email']=="") 
    || ($_SESSION['password']=="")){
unset(
        $_SESSION['id'],
        $_SESSION['name'],
        $_SESSION['email'],
        $_SESSION['nivel_acesso'],
        $_SESSION['user'],
        $_SESSION['password']);

        //mensagem de erro 
        $_SESSION['msg_login'] = "Usuario ou senha invalido";
        header("Location:login.php");
    }
?>