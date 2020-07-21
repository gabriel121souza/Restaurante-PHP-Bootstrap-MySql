<?php
    include_once("conexao/conexao.php");
    $result_menu = "SELECT * FROM menu";
    $resultado_menu = mysqli_query($conn, $result_menu); 
    $rows_menu = mysqli_fetch_assoc($resultado_menu);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">       
    <!-- Scripts -->
    
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Delirius</title>
    <style>

body{
   background:url("assents/background.jpg")no-repeat;;
   background-size: cover;
   height: 160vh;

}
</style>

</head>
</head>
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<main>
    <div class="container-fluid">
      <!-- slider -->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assents/backgroundhd.jpg" class="d-block w-100" alt="Projetos de e-commerce">

            <!-- tirar classe d-none -->

            <div class="carousel-caption d-md-block">
              <h2>Quer Comodidade de onde estiver?</h5>
              <p>Conte conosco, temos diversos pedidos que você pode está saboreando.</p>
              <a href="#menu" class="main-btn">Ver Cardapio</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assents/backgroundhd2.jpg" class="d-block w-100" alt="Engenharia de software">
            <div class="carousel-caption d-md-block">
              <h2>Está buscando lazer ambiente legal com um preço camarada?</h5>
              <p>A Delirius conta com uma equipe dinamica e top para te atender da melhor forma possivel.</p>
              <a href="#sobre" class="main-btn">Entre em contato</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assents/backgroundhd3.jpg" class="d-block w-100" alt="Manutenção em software">
            <div class="carousel-caption d-md-block">
              <h2>Quer Saber sobre o melhor Restaurante de Brasilia?</h5>
              <p>Nos da delirius trabalhamos para o seu conforto.</p>
              <br>
              <a href="about.php" class="main-btn">Saiba quem somos</a>
               
            </div>
          </div>
        </div>
        <br>
        <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</main>
<h1 class="cardapio" style="color:#fff; text-align:center; background:black" ><a name="menu">Cardapio</a></h1>
<br>
<br>
<div class="container theme-showcase" role="main">
			<div class="page-header">
				
			</div>
			<div class="row" >
				<?php while($rows_menu = mysqli_fetch_assoc($resultado_menu)){ ?>
					<div class="col-sm-6 col-md-4" >
						<div class="thumbnail">
							<img src="assents/carrosel1.png" alt="...">
							<div class="caption text-center">
                            <a  class="text-light bg-dark" href="detalhes.php?id_menu=<?php echo $rows_menu['id']; ?>"><h3><?php echo $rows_menu['name']; ?>
                               <br> R$ <?php echo $rows_menu['price'];?></h3></a>
								<p><a href="detalhes.php?id_menu=<?php echo $rows_menu['id']; ?>" class="btn btn-dark" role="button">Comprar</a> </p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
        </div>
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

<script type="text/javascript" src="script.js"></script>
</body>
</html>