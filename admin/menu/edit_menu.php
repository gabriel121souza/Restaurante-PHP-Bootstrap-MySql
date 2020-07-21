<?php 
session_start();

include_once("../../conexao/conexao.php");


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_manager = "SELECT * FROM managers WHERE id = '$id'";
 $resultado_manager = mysqli_query($conn, $result_manager);
 
 $row_manager = mysqli_fetch_assoc($resultado_manager);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/theme/">

    <title>Delirius admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>

</head>
<body>
<?php

include_once("../menu_admin.php");

?>
<div class="container theme-showcase" role="main">
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <form  method="POST" action="proc_edit_user.php">
        <div class="form-group">
            <br><br> <br>
            <h2>Editar O Gerente</h2>
            <input type="hidden" name="id" value="<?php echo $row_manager['id']; ?>">
            <label>Nome: </label>
            <input type="text" name="name" class="form-control" value="<?php echo $row_manager['name']; ?>">
            <br>
            <label>Email: </label>
            <input type="email" name="email" class="form-control" value="<?php echo $row_manager['email']; ?>">
            <br>
            <label>Usuario: </label>
            <input type="text" name="user" class="form-control" value="<?php echo $row_manager['user']; ?> ">
            <br>
            <label>Senha: </label>
            <input type="text" name="password" class="form-control" value="<?php echo $row_manager['password']; ?>">
            <br>
            <button Type="submit" class="btn btn-success">Editar</button>
            <a href="../listarUsuario.php" type="button" class ="btn btn-danger" style="margin-left:10px;">voltar</a>

    </form>
</div> <!-- /container -->

</body>
</html>

<!-- Default form register -->
