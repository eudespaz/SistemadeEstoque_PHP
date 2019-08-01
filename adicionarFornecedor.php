<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionar Fornecedor</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		
		#tamanhoContainer {
			width: 500px;
		}

	</style>
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

<div class="container" id="tamanhoContainer" style="margin-top: 40px">

	<div style="text-align: right;">
    <a class="btn btn-primary" href="menu.php" role="button">Voltar</a>
</div>

		<h4>Adicionar Fornecedor</h4>

<form action="inserirFornecedor.php" method="post" style="margin-top: 40px">
  <div class="form-group">
    <input type="text" class="form-control" id="categoria" name="fornecedor" placeholder="Fornecedor" autocomplete="off" required>
  </div>
  <div style="text-align: right;">
  	<button type="submit" class="btn btn-success">Cadastrar</button>
  </div>
</form>

</div>




<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
