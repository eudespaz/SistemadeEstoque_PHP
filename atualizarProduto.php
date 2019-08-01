<?php 


include 'conexao.php';

$id = $_POST['id'];
//$nProduto = $_POST['nProduto'];
$nomeProduto = $_POST['nomeProduto'];
$categoria = $_POST['categoria'];
$quantidades = $_POST['quantidades'];
$fornecedor = $_POST['fornecedor'];


$sql = "UPDATE `estoque` SET `nomeProduto`='$nomeProduto',`categoria`='$categoria',`quantidades`=$quantidades,`fornecedor`='$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao, $sql);

 ?>

 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container" style="width: 400px">
	
<center>
	<h3>Atualizado com Sucesso!!</h3>
	<div style="margin-top: 10px">
	<a href="listarProdutos.php" class="btn btn-primary">Voltar</a>
</div>
</center>


</div>