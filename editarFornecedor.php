<?php  


include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar Fornecedor</title>
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

<div class="container" style="text-align: right;">
<a class="btn btn-primary btn-sm" href="listarCategoria.php" role="button">Voltar</a>
</div>

<div class="container" id="tamanhoContainer" style="margin-top: 40px">
  <h4>Editar Fornecedor</h4>

<form  action="atualizarFornecedor.php" method="post" style="margin-top: 20px">
<?php  

  $sql = "SELECT * FROM `fornecedor` WHERE id_fornecedor = $id";
  $buscar = mysqli_query($conexao, $sql);
  while ($array = mysqli_fetch_array($buscar)) {
  
          $id_fornecedor = $array['id_fornecedor'];
              $fornecedor = $array['fornecedor'];
          
    ?>

  <div class="form-group">
      <label for="exampleInputEmail1">Fornecedor</label>
      <input type="text" class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
      <input type="text" class="form-control" name="id" value="<?php echo $id ?>"style="display: none;">
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