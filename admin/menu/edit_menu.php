<?php 
session_start();

include_once("../../conexao/conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_menu = "SELECT * FROM menu WHERE id = '$id'";
 $resultado_menu = mysqli_query($conn, $result_menu);
 
 $row_menu = mysqli_fetch_assoc($resultado_menu);
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

    <div class="page-header">
    <br>
    <?php
        if(isset($_SESSION['msg'])){?>
            <div class="alert alert-danger" role="alert">
            <?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    </div>
    <form  method="POST" action="proc_edit_menu.php">
        <div class="form-group">
            <br>
            <h2>Editar O Menu</h2>
            <input type="hidden" name="id" value="<?php echo $row_menu['id']; ?>">
            <label>Nome: </label>
            <input type="text" name="name" class="form-control" value="<?php echo $row_menu['name']; ?>">
            <br>
            <label>Categoria: </label>
            <input type="text" name="category" class="form-control" value="<?php echo $row_menu['category'];?>">
            <br>
            <label>Preco: </label>
            <input type="text" name="price" class="form-control" value="<?php echo $row_menu['price']; ?>">
            <br>
            <textarea name="description" cols="60" rows="5"><?php echo $row_menu['description']; ?></textarea>
            <br>
            <br>



            <button Type="submit" class="btn btn-success">Editar</button>
            <a href="../listarMenu.php" type="button" class ="btn btn-danger" style="margin-left:10px;">voltar</a>

    </form>
</div> <!-- /container -->

</body>
</html>

<!-- Default form register -->
