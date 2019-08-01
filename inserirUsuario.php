<?php  

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$emailusuario = $_POST['emailusuario'];  
$senhausuario = $_POST['senhausuario'];
$nivelusuario = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios (nome_usuario,email_usuario,senha_usuario,nivel_usuario,status) VALUES ('$nomeusuario','$emailusuario',sha1('$senhausuario'),$nivelusuario, '$status')";

$inserir = mysqli_query($conexao, $sql);

?>


 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 <div class="container" style="width: 500px;margin-top: 50px" >

 		<center>

 		<h4>Usuário cadastrado com sucesso!!</h4>

<div style="padding-top: 20px">
		
		
		<a href="cadastroUsuario.php" role="button" class="btn btn-sm btn-primary">Voltar</a>


		</center>	
</div>

</div>
