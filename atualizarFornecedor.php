<?php 


include 'conexao.php';

$id = $_POST['id'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `fornecedor` SET `fornecedor`='$fornecedor' WHERE id_fornecedor = $id";

$atualizar = mysqli_query($conexao, $sql);

 ?>

 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container" style="width: 400px">
	
<center>
	<h3>Atualizado com Sucesso!!</h3>
	<div style="margin-top: 10px">
	<a href="listarFornecedor.php" class="btn btn-primary">Voltar</a>
</div>
</center>


</div>