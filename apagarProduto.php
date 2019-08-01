<?php  

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$apagar = mysqli_query($conexao, $sql);


?>

 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container" style="width: 400px">
	
<center>
	<h3>Deletado com Sucesso!!</h3>
	<div style="margin-top: 10px">
	<a href="listarProdutos.php" class="btn btn-primary">Voltar</a>
</div>
</center>


</div>