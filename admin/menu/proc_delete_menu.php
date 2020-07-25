<?php 
session_start();
include_once("../../conexao/conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
$result_menu = "DELETE FROM menu WHERE id= '$id'";
$resultado_menu = mysqli_query($conn, $result_menu);

if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Prato Excluido com Sucesso</p>";
    header("Location: ../listarMenu.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Erro em Excluir o prato</p>";
    header("Location: ../listarMenu.php");

}
}

