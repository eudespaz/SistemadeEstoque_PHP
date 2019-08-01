<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no"> <!--AJUSTAR TELA-->
	<meta charset="utf-8">
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		
		#tamanhoContainer {
			width: 350px;webkit-box-shadow: 3px 9px 13px 6px rgba(0,0,0,0.28);
			-moz-box-shadow: 3px 9px 13px 6px rgba(0,0,0,0.28);
			box-shadow: 3px 9px 13px 6px rgba(0,0,0,0.28);
			} </style>


</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 90px; border-radius: 15px; border: 2px solid #f3f3f3">
	<div style="padding: 25px">

<form action="index1.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="usuario" placeholder="Email" autocomplete="off" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senhaUsuario" placeholder="Password" autocomplete="off" required>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
 <div style="text-align: right;">
  	<button type="submit" class="btn btn-success">Acessar</button>
  </div>
</div>
</form>

</div>


<div style="margin-top: 15px">
<center>
	
	<small>Você não possui cadastro? Clique <a href="cadastroUsuarioExterno.php"><b> aqui </b></small></a>

</center>

</div>


<center>
<div style="margin-top: 135px" >
<footer><small>© 2019 - Desenvolvedor Eudes Paz | Todos os direitos reservados</small></footer>
</div>
</center>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>