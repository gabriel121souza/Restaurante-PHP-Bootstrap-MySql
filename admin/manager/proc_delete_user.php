<?php 
session_start();
include_once("../../conexao/conexao.php");


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if(!empty($id)){


$result_manager= "DELETE FROM managers WHERE id='$id'";
$resultado_manager = mysqli_query($conn, $result_manager);


if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Paciente apagado com sucesso</p><br>";
    header("Location: ../listarUsuario.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Erro em Excluir o paciente</p><br>";
    header("Location: ../listarUsuario.php");
}
}else{
    $_SESSION['msg'] = "<p style='color:red;'>paciente nao foi selecionado</p><br>";
    header("Location: ../listaUsuario.php");
}