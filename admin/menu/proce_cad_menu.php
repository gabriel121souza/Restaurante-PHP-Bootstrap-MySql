<?php
session_start();

$btnCad = filter_input(INPUT_POST, 'btn-cad', FILTER_SANITIZE_STRING);

if($btnCad){
    include_once("../../conexao/conexao.php");
    $dados = filter_input(INPUT_POST, FILTER_DEFAULT);
    $erro = false;
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $price = $_POST['price'];
    $erro = false;

    $Vimage1 = $_FILES['img1']['name']; //pega a extensao do arquivo
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['img1']['tmp_name'], $diretorio.$Vimage1); //efetua o upload
    if(!$erro){

        $result_menu = "INSERT INTO menu (name, category, description, price, Vimage1, data ) VALUES ('$name', '$category', '$description', '$price', '$Vimage1', NOW())";
        $resultado_menu = mysqli_query($conn, $result_menu);
        if(mysqli_insert_id($conn)){
            $_SESSION['msg'] = "Prato cadastrado com sucesso";
            header("Location: ../listarMenu.php");
        }else{
            $_SESSION['msg'] = "Erro ao cadastrar tente novamente";
            header("Location: ../cadastrarMenu.php");
        }
    }
}