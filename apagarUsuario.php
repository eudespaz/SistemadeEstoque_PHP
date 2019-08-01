<?php  

include 'conexao.php';

$id = $_GET['id'];

$apagar = "DELETE FROM usuarios WHERE id_usuario = $id";
$fila = mysqli_query($conexao, $apagar);

?>


 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 <div class="container" style="width: 500px;margin-top: 50px" >

 		<center>

 		<h4>Usuário excluido com sucesso!!</h4>

<div style="padding-top: 20px">
		
		
		<a href="listarUsuariosDesabilitados.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
		<!--<a href="index.php" role="button" class="btn btn-sm btn-primary">Inicio</a>-->

		</center>	
</div>

</div>
