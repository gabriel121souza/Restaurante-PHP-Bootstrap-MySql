<?php 
session_start();
include_once("../../conexao/conexao.php");
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


$result_manager = "UPDATE managers SET name='$name', email='$email', user='$user', password='$password' WHERE id='$id'";

$resultado_manager = mysqli_query($conn, $result_manager);

if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style= 'color:green;'>usuario editado com sucesso</p>";
    header("Location: ../listarUsuario.php");
}else{
    $_SESSION['msg'] = "<p style= 'color:red;'>Falha na edição ";
    header("Location: edit_user.php?id=$id");
}
