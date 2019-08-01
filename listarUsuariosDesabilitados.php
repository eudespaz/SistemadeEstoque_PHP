<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aprovar Usuário</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

 <?php  

  session_start();
  $usuario = $_SESSION['usuario'];

  $_SESSION['usuario'];

  if(!isset( $_SESSION['usuario'])) {
    header('Location: index.php');
  
  }
  include 'conexao.php';

  $sql = "SELECT nivel_usuario FROM usuarios WHERE email_usuario = '$usuario' and status='Ativo'";
  $buscar = mysqli_query($conexao, $sql);
  $array = mysqli_fetch_array($buscar);
  $nivel = $array['nivel_usuario'];

  ?>


	<div class="container" style="margin-top: 40px">

		<div style="text-align: right;">
    <a class="btn btn-primary" href="menu.php" role="button">Voltar</a>
 
</div>
	
		<h3>Aprovação de Usuários</h3>
		<br>

		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Usuário </th>
      <th scope="col">Email </th>
      <th scope="col">Nível </th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  

    
    		<?php  
    			include 'conexao.php';

    			$sql="SELECT * FROM usuarios WHERE status = 'Inativo'";
    			$buscar = mysqli_query($conexao, $sql);

    			while ($array = mysqli_fetch_array($buscar)) {

    					$id_usuario = $array['id_usuario'];
              $nomeusuario = $array['nome_usuario'];
              $emailusuario = $array['email_usuario'];
              $nivelusuario = $array['nivel_usuario'];
    				
				?>
	<tr>
       <td> <?php echo $nomeusuario ?></td>
       <td> <?php echo $emailusuario ?></td>
       <td> <?php echo $nivelusuario ?></td>

       <td>
        <a class="btn btn-success btn-sm" href="aprovarUsuario.php?id=<?php echo $id_usuario ?>
       &nivelusuario=1" role="button">Administrador</a> 

       <a class="btn btn-dark btn-sm" href="aprovarUsuario.php?id=<?php echo $id_usuario ?>
       &nivelusuario=2" role="button">Funcionario</a> 

       <a class="btn btn-primary btn-sm" href="aprovarUsuario.php?id=<?php echo $id_usuario ?>
       &nivelusuario=3" role="button">Conferente</a> 
          

        <a class="btn btn-danger btn-sm " href="apagarUsuario.php?id=<?php echo $id_usuario ?> &nivelusuario=<?php echo $nivelusuario ?>" role="button">Apagar</a></td>

   </tr>

 	<?php } ?>

</table>

</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>




