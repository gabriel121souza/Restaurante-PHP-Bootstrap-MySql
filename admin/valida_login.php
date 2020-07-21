<?php
session_start();
include_once("../conexao/conexao.php");
$user = $_POST['user'];
$password = $_POST['password'];


$result = "SELECT * FROM users WHERE user='$user' AND password='$password' LIMIT 1 ";
$resultado = mysqli_query($conn, $result);

$row = mysqli_fetch_assoc($resultado);
    if(empty($row)){
        $_SESSION['msg_login'] = "Usuario ou senha invalido";
        header("Location: login.php");
        
    }else{
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['nivel_acesso'] = $row['nivel_acesso_id'];
        $_SESSION['user'] = $row['user'];
        $_SESSION['password'] = $row['password'];
        
        if($_SESSION['nivel_acesso'] == 1){
            header("Location: admin.php");
        }else{
        header("Location: manager.php");
        }
    }

