<?php  


include 'conexao.php';

$id = $_GET['id'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Produto</title>
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


<div class="container" style="text-align: center;">
<a class="btn btn-primary btn-sm" href="listarProdutos.php" role="button">Voltar</a>
</div>

<div class="container" id="tamanhoContainer" style="margin-top: 40px">
	<h4>Editar Produto</h4>

<form  action="atualizarProduto.php" method="post" style="margin-top: 20px">
<?php  

	$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
	$buscar = mysqli_query($conexao, $sql);
	while ($array = mysqli_fetch_array($buscar)) {
	
					$id_estoque = $array['id_estoque'];
    					$nProduto = $array['nProduto'];
    					$nomeProduto = $array['nomeProduto'];
    					$categoria = $array['categoria'];
    					$quantidades = $array['quantidades']; 
    					$fornecedor = $array['fornecedor'];	

		?>

 
	<div class="form-group">
    	<label for="exampleInputEmail1">Número do Produto</label>
   		 <input type="number" class="form-control" name="nProduto" value="<?php echo $nProduto ?>"disabled>
   		 <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
 	</div>
 		<div class="form-group">
    	<label for="exampleInputEmail1">Nome Produto</label>
  	  <input type="text" class="form-control" name="nomeProduto" value="<?php echo $nomeProduto ?>">
 	</div>
 	<div class="form-group">
    <label for="exampleFormControlSelect1">Categoria</label>
    <select class="form-control" id="exampleFormControlSelect1" name="categoria" >
   
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
   		 <label for="exampleInputEmail1">Quantidades</label>
   		 <input type="number" class="form-control" name="quantidades" value="<?php echo $quantidades ?>">
 	</div>
 	<div class="form-group">
    <label for="exampleFormControlSelect1">Fornecedor</label>
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
  	<button type="submit" class="btn btn-success">Atualizar</button>
  </div>
<?php  } ?>
 </form>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
