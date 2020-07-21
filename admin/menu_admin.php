<!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar navbar-inverse navbar-fixed-top"">
  <a class="navbar-brand" href="admin.php">Delirius</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuario
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="listarUsuario.php">Listar</a>
          <a class="dropdown-item" href="cadastrarManager.php">Cadastrar</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cardapio
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="listarMenu.php">Listar</a>
          <a class="dropdown-item" href="cadastrarMenu.php">Cadastrar</a>
          
      <li class="nav-item">
        <a class="nav-link" href="exit.php">Sair</a>
      </li>
    </ul>
  </div>
</nav>
