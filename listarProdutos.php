<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem de produtos</title>
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


	<div class="container" style="margin-top: 40px">

		<div style="text-align: right;">
    <a class="btn btn-primary" href="menu.php" role="button">Voltar</a>
    <a class="btn btn-success" href="AdicionarProduto.php" role="button">Adicionar</a>
</div>
	
		<h3>Lista de Produtos: </h3>
		<br>

		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nº Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categorias</th>
      <th scope="col">Quantidades</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  

    
    		<?php  
    			include 'conexao.php';

    			$sql="SELECT * FROM `estoque`";
    			$buscar = mysqli_query($conexao, $sql);

    			while ($array = mysqli_fetch_array($buscar)) {

    					$id_estoque = $array['id_estoque'];
    					$nProduto = $array['nProduto'];
    					$nomeProduto = $array['nomeProduto'];
    					$categoria = $array['categoria'];
    					$quantidades = $array['quantidades']; 
    					$fornecedor = $array['fornecedor'];
				?>
	<tr>

       <td> <?php echo $nProduto ?></td>
       <td> <?php echo $nomeProduto ?></td>
       <td> <?php echo $categoria ?></td>
       <td> <?php echo $quantidades ?></td>
       <td> <?php echo $fornecedor ?></td>
       <td>

        <a class="btn btn-primary btn-sm" href="editarProduto.php?id=<?php echo $id_estoque ?>" role="button">Editar</a>   
        <a class="btn btn-danger btn-sm " href="apagarProduto.php?id=<?php echo $id_estoque ?>" role="button">Apagar</a>

      </td>

   </tr>

 	<?php } ?>
  
</table>

</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>




