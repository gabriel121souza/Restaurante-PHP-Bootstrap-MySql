<?php 
session_start();

include_once("../../conexao/conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING);
$category = filter_input(INPUT_POST,'category', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

$result_menu = "UPDATE menu SET name='$name', category='$category', price='$price', description='$description' WHERE id='$id'";
$resultado_menu = mysqli_query($conn, $result_menu);

if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Menu Alterado com sucesso</p>";
    header("Location: ../listarMenu.php");
}else{
    $_SESSION['msg'] ="<p style = 'color:red;'>Falha na alteração</p>";
    header("Location: edit_menu.php?id=$id");
}