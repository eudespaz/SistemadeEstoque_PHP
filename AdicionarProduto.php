<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no">
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
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

	<h4>Formulário de Cadastro</h4>

<form  action="inserirProduto.php" method="post" style="margin-top: 20px">
	<div class="form-group">
    	<label>Número do Produto</label>
   		 <input type="number" class="form-control" name="nProduto" placeholder="Entre com o Número do Produto" autocomplete="off" required>
 	</div>
 		<div class="form-group">
    	<label>Nome Produto</label>
  	  <input type="text" class="form-control" name="nomeProduto" placeholder="Entre com o nome do Produto" autocomplete="off" required>
 	</div>
 	<div class="form-group">
    <label>Categoria</label>
    <select class="form-control"  name="categoria" >

      <?php 

      include 'conexao.php';
      $sql = "SELECT * FROM categoria order by categoria ASC";
      $buscar = mysqli_query($conexao, $sql);
      $inserir = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($buscar)) {
          
          $id_categoria = $array['id_categoria'];
          $categoria = $array['categoria'];

      ?>  
         
      <option><?php echo $categoria  ?></option>


      <?php } ?>

    </select>
  </div>
 		<div class="form-group">
   		 <label>Quantidades</label>
   		 <input type="number" class="form-control" name="quantidades" placeholder="Entre com a Quantidade" autocomplete="off" required>
 	</div>
 	<div class="form-group">
    <label>Fornecedor</label>
    <select class="form-control" name="fornecedor">


      <?php 

      include 'conexao.php';
      $sql = "SELECT * FROM fornecedor order by fornecedor ASC";
      $buscar = mysqli_query($conexao, $sql);
      $inserir = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($buscar)) {
          
          $id_fornecedor = $array['id_fornecedor'];
          $fornecedor = $array['fornecedor'];

      ?>  
         
      <option><?php echo $fornecedor  ?></option>


      <?php } ?>

    </select>
  </div>
  	<div style="text-align: right;">
  	<button type="submit" class="btn btn-success"> Cadastro</button>
  </div>
 </form>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
