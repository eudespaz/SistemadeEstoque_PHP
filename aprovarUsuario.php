<?php  

include 'conexao.php';

$id= $_GET['id'];
$nivelusuario = $_GET['nivelusuario'];


if ($nivelusuario == 1) {
	
	$update = "UPDATE usuarios SET status= 'Ativo', nivel_usuario = 1  WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao, $update);
	//echo "ADMINISTRADOR APROVADO";
}
if ($nivelusuario == 2) {

	$update = "UPDATE usuarios SET status= 'Ativo', nivel_usuario = 2  WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao, $update);
	//echo "FUNCIONÁRIO APROVADO";
}
if ($nivelusuario == 3) {
	
	$update = "UPDATE usuarios SET status= 'Ativo', nivel_usuario = 3  WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao, $update);
	//echo "CONFERENTE APROVADO";
}

?>



<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 <div class="container" style="width: 500px;margin-top: 50px" >

 		<center>

 			<h4>Usuário Habilitado com sucesso!!</h4>

<div style="padding-top: 20px">
		
		
		<a href="listarUsuariosDesabilitados.php" role="button" class="btn btn-sm btn-primary">Voltar</a>

		</center>	
</div>

</div>