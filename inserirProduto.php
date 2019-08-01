<?php 

include 'conexao.php';

$nProduto = $_POST['nProduto'];
$nomeProduto = $_POST['nomeProduto'];
$categoria = $_POST['categoria'];
$quantidades = $_POST['quantidades'];
$fornecedor = $_POST['fornecedor'];


$sql =  "INSERT INTO `estoque`(`nProduto`, `nomeProduto`, `categoria`, `quantidades`, `fornecedor`) VALUES ($nProduto,'$nomeProduto','$categoria',$quantidades,'$fornecedor')";
					
$inserir = mysqli_query($conexao, $sql);
 ?>


 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 <div class="container" style="width: 500px;margin-top: 50px" >

 		<center>

 		<h4>Produto Adicionado com sucesso!!</h4>

<div style="padding-top: 20px">
		
		
		<a href="AdicionarProduto.php" role="button" class="btn btn-sm btn-primary">Cadastrar outro Ítem?</a>
		<!--<a href="index.php" role="button" class="btn btn-sm btn-primary">Inicio</a>-->

		</center>	
</div>

</div>


