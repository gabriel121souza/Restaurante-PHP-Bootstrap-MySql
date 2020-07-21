
<?php include_once("conexao/conexao.php");
$id_menu = $_GET['id_menu'];
$result_menu = "SELECT * FROM menu WHERE id='$id_menu'";
$resultado_menu = mysqli_query($conn, $result_menu);
$row_menu = mysqli_fetch_assoc($resultado_menu);
?>

<?php 
	$list_about = "SELECT * FROM about";
	$listar_about = mysqli_query($conn, $list_about);


?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">       
    <!-- Scripts -->
    
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Delirius</title>
	</head>
	<style>
		body{
			background: url('assents/background-detalhes.jpg')no-repeat;
			background-size: cover;

		}
	</style>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
    <img src="assents/logo.jpg" width="60" height="60" loading="lazy">
    Delirius
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Menu Inicial <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Sobre Nos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sobre">Contatos</a>
      </li>

    </ul>
   
  </div>
</nav>
<main>	
	<div class="jumbotron" style="backgroud-color:none">
  <h1 class="display-4" style="text-transform:uppercase"><?php echo $row_menu['category']?>: <?php echo $row_menu['name']; ?></h1>
  <p class="lead"><?php echo $row_menu['description']?>.</p>
  <hr class="my-4">
  <p>GOSTOU? FAÇA SEU PEDIDO CLICANDO NO BOTÃO.</p>
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
  Peça seu pedido agora
</button>

</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ENTRE EM CONTATO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<?php 
			while($row_about = mysqli_fetch_assoc($listar_about)){
		?>
		<p>Email: <?php echo $row_about['email']?></p>
		<p>Telefone: <?php echo $row_about['phone']?></p>
		<p>Celular: <?php echo $row_about['cellphone']?></p>
		<p>Endereço: <?php echo $row_about['address']?></p>
			<?php } ?>
      </div>
    </div>
  </div>
</div>
</main>	






<footer class="container border-top mt-5 py-5 ">
    <div class="row">
        <div class="col-12-md col-md">
        <p class="text-muted">&copy gabriel121souza@gmail.com 2020</p>
        </div>
    <div class="col-6 col-md">
        <h4> <a name="sobre"> Sobre</a></h4>
        <ul class="list-unstyled">
            <li><a href="#" class="text-muted"><span style="font-size:20px; padding:10px" class="far fa-envelope"></span>trabalhe Conosco:(delirius@gmail.com)</a></li>
            <li><a href="#" class="text-muted"><span style="font-size:20px; padding:10px" class="fas fa-phone"></span>Telefone: (61)3624-7612</a></li>
            <li><a href="#" class="text-muted"><span style="font-size:20px; padding:10px" class="fas fa-mobile-alt"></span>   Celular: (61)993581926</a></li>
            
        </ul>
    </div>
    <div class="col-6 col-md">
        <h4>Segue nas Redes Sociais</h4>
        <a target="_blank" href="https://www.linkedin.com/in/gabriel-de-souza-rodrigues-a40760145/
        "><span  style="font-size:40px; padding:10px" class="fab fa-linkedin"></span></a>
        <a target="_blank" href="https://github.com/gabriel121souza"><span  style="font-size:40px; padding:10px" class="fab fa-github"></span></a>
        <a target="_blank" href="https://www.instagram.com/biel_souzar/"><span  style="font-size:40px; padding:10px" class="fab fa-instagram"></span></a>
        <a target="_blank" href="https://www.facebook.com/gabriel121souza/"><span  style="font-size:40px; padding:10px" class="fab fa-facebook-square"></span></a>
    </div>    

    </div>

</footer>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>