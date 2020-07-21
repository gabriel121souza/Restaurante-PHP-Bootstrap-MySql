<?php
session_start();
$btnCad = filter_input(INPUT_POST, 'btn-cad', FILTER_SANITIZE_STRING);
if($btnCad){
    include_once("../../conexao/conexao.php");
    $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $erro = false;
    $dados_st = array_map('strip_tags', $dados_rc);
    $dados = array_map('trim', $dados_st);
    

    if(in_array('',$dados)){
        $erro = true;
        $_SESSION['msg'] = "todos os campos deverao ser preenchidos";
        header("Location: cadastrarManager.php");
    }elseif((strlen($dados['password'])) < 6){
        $erro =  true;
        $_SESSION['msg'] = "A senha tem que conter no minimo 6 carateres";
        header("Location: cadastrarManager.php");
    }elseif(stristr($dados['password'], "'")){
        $erro = true;
        $_SESSION['msg'] = "o Caractere e invalido na senha(') ";
        header("Location: cadastrarManager.php");
    }else{
        $result_manager = "SELECT id FROM managers WHERE email='".$dados['email'] ."'";
        $resultado_manager = mysqli_query($conn, $result_manager);
        if(($resultado_manager) AND ($resultado_manager -> num_rows !=0)){
            $erro = true;
            $_SESSION['msg'] = "email existente no sistema tente outro email";
            header("Location: cadastrarManager.php");
        }
            $result_manager = "SELECT id FROM managers WHERE user='".$dados['user']."'";
            $resultado_manager = mysqli_query($conn, $result_manager);
            if(($resultado_manager) AND ($resultado_manager -> num_rows !=0)){
                $erro = true;
                $_SESSION['msg'] = "usuario existente no sistema tente outro usuario";
                header("Location: cadastrarManager.php");
            }
        }
        if(!$erro){
            $dados['password'] = password_hash($dados['password'], PASSWORD_DEFAULT);
         $result_manager = "INSERT INTO managers (name, email, user, password, created) VALUES (
        '". $dados['name']. "',
        '". $dados['email']. "',
        '". $dados['user']. "',
        '". $dados['password']. "',
        NOW()
        )";
         
         $resultado_manager = mysqli_query($conn, $result_manager);
        
         if(mysqli_insert_id($conn)){
            $_SESSION['msg'] = "usuario cadastrado com sucesso";
            header("Location: ../listarUsuario.php");
         }else{
            
            $_SESSION['msg'] = "Erro ao cadastrar tente novamente";
            header("Location: ../cadastrarManager.php");

        }
	}
}
?>