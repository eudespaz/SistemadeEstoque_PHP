<?php 

include 'conexao.php';

$categoria = $_POST['categoria'];



$sql =  "INSERT INTO categoria (`categoria`) VALUES ('$categoria')";
					
$inserir = mysqli_query($conexao, $sql);

 ?>


 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 <div class="container" style="width: 500px;margin-top: 50px" >

 		<center>

 		<h4>Categoria Adicionada com sucesso!!</h4>

<div style="padding-top: 20px">
		
		
		<a href="adicionarCategoria.php" role="button" class="btn btn-sm btn-primary">Cadastrar outro Ítem?</a>
		<!--<a href="index.php" role="button" class="btn btn-sm btn-primary">Inicio</a>-->

		</center>	
</div>

</div>


