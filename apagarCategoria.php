<?php  

include 'conexao.php';

$id = $_GET['id'];

$apagar = "DELETE FROM categoria WHERE id_categoria = $id";
$fila = mysqli_query($conexao, $apagar);

?>


 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="container" style="width: 400px">
	
<center>
	<h3>Deletado com Sucesso!!</h3>
	<div style="margin-top: 10px">
	<a href="listarCategoria.php" class="btn btn-primary">Voltar</a>
</div>
</center>


</div>