<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no">
	<meta charset="utf-8">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

  <?php  

  session_start();
  $usuario = $_SESSION['usuario'];

  $_SESSION['usuario'];


  if(!isset( $_SESSION['usuario'])) {
    header('Location: index.php');
  
  }
  include 'conexao.php';

  $sql = "SELECT nivel_usuario FROM usuarios WHERE email_usuario = '$usuario' and status='Ativo'";
  $buscar = mysqli_query($conexao, $sql);
  $array = mysqli_fetch_array($buscar);
  $nivel = $array['nivel_usuario'];

  ?>

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item dropdown">
      

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true">
          Produtos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="listarProdutos.php">Produtos Cadastrados</a>
          <a class="dropdown-item" href="AdicionarProduto.php">Adicionar Produtos</a>
        </div>
      </li>
    

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="listarCategoria.php">Categorias Cadastradas</a>
          <a class="dropdown-item" href="adicionarCategoria.php">Adicionar Categorias</a>
        </div>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true">
          Fornecedores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="listarFornecedor.php">Fornecedores Cadastrados</a>
          <a class="dropdown-item" href="adicionarFornecedor.php">Adicionar Fornecedor</a>
        </div>
      </li>
     <li class="nav-item dropdown">
       <?php  
        if ($nivel == 1){   

        ?>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true">
          Usuários
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="listarUsuariosAtivos.php">Usuários Cadastrados</a>
          <a class="dropdown-item" href="listarUsuariosDesabilitados.php" >Aprovar Usuários</a>
           <a class="dropdown-item" href="cadastroUsuario.php" >Cadastro de Usuário</a>
        </div>
      </li>
      <?php } ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true">
          Suporte
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Suporte 1</a>
          <a class="dropdown-item" href="#">Suporte 2</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true">
          Contatos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Contato 1</a>
          <a class="dropdown-item" href="#">Contato 2</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true">
          Blogs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Blog 1</a>
          <a class="dropdown-item" href="#">blog 2</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true">
          Investidores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Investidor 1</a>
          <a class="dropdown-item" href="#">Investidor 2</a>
        </div>
      </li>

      <li class="btn btn-outline-primary">
          <p> Usuário: <?php echo $_SESSION['usuario'];  ?></p>
      </li>
      <li class="btn btn-outline-primary">
        <a href="index.php">Sair</a>
      </li>
      <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar..</button>
      
    </form>-->
  
    </ul>
  </div>

  <div class="card-body">
    <h5 class="card-title">Sistema de Estoque</h5>
    <p class="card-text">AVISO IMPORTANTE Sistema em fase de testes. </p>
    <a class="btn btn-outline-primary" href="AdicionarProduto.php">Adicionar Produtos</a>
  </div>

<div style="margin-top: 340px">
<footer><small>© 2019 - Desenvolvedor Eudes Paz | Todos os direitos reservados</small></footer>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>