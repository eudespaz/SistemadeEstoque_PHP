<?php 

include 'conexao.php';

$fornecedor = $_POST['fornecedor'];



$sql =  "INSERT INTO fornecedor (`fornecedor`) VALUES ('$fornecedor')";
					
$inserir = mysqli_query($conexao, $sql);
 ?>


 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 <div class="container" style="width: 500px;margin-top: 50px" >

 		<center>

 		<h4>Fornecedor Adicionado com sucesso!!</h4>

<div style="padding-top: 20px">
		
		
		<a href="adicionarFornecedor.php" role="button" class="btn btn-sm btn-primary">Cadastrar outro Ítem!</a>
		<!--<a href="index.php" role="button" class="btn btn-sm btn-primary">Inicio</a>-->

		</center>	
</div>

</div>


