<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no"> <!--AJUSTAR TELA-->
	<meta charset="utf-8">
	<title>Cadastro de Usuário</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		
		#tamanhoContainer {
			width: 400px;webkit-box-shadow: 3px 9px 13px 6px rgba(0,0,0,0.28);
			-moz-box-shadow: 3px 9px 13px 6px rgba(0,0,0,0.28);
			box-shadow: 3px 9px 13px 6px rgba(0,0,0,0.28);
			} </style>

</head>
<body>


<div class="container" id="tamanhoContainer" style="margin-top: 30px; border-radius: 15px; border: 2px solid #f3f3f3">
	
	<div style="padding: 2px">

	<h4>Cadastro de Usuário</h4>
	<div style="text-align: right;">
    <a class="btn btn-primary btn-sm" href="index.php" role="button">Voltar</a>
</div>

<form action="inserirUsuarioExterno.php" method="post">
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="nomeusuario"  placeholder="Nome Completo" autocomplete="off" required>
    </div>
    <div class="form-group" >
      <label>Email</label>
      <input type="email" class="form-control" name="emailusuario" placeholder="Email" autocomplete="off" required>
    </div>

  <div class="form-group">
    <label>Senha</label>
    <input type="Password" id="txtSenha" class="form-control" name="senhausuario"  placeholder="Senha" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Confirmar Senha</label>
    <input type="Password" class="form-control" name="senhausuario2" placeholder="Confirmação da senha" autocomplete="off" required oninput="validaSenha(this)">
    <small>Precisa ser igual a senha digitada acima...</small>
</div>
 <div style="text-align: right;">
  	<button type="submit" class="btn btn-success">Cadastrar</button>
  </div>

</form>

</div>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

<script>
	function validaSenha (input){
		if (input.value != document.getElementById('txtSenha').value){
			input.setCustomValidity('Repita a senha corretamente');

		}else {
			input.setCustomValidity('');
		}

	}

</script>
</body>
</html>
