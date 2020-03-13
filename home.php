<?php 
session_start();
	if (!isset($_SESSION['cd_pessoa'])) {
		echo '<script>window.location="index.php"</script>';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
			FORMACAO
		<form method="post" id="form-formacao">
			curso ou ensino:
			<input type="text" name="curso">
			instituicao de ensino:
			<input type="text" name="insti">
			ANO de inicio
			<input type="number" maxlength="4" name="dt_ini">
			ANO de finalizaçao
			<input type="number" maxlength="4" name="dt_fim">
			descricao(opcionao)
			<input type="text" name="desc">
			<input type="submit" value="enviar">
		</form><hr>
			EXPERIENCIA
		<form method="post" id="form-exp">
			nome:
			<input type="text" name="nm_exp">
			empresa:
			<input type="text" name="empresa">
			desc
			<input type="text" name="descr">
			ANO de inicio
			<input type="number" maxlength="4" name="dt_ini">
			ANO de finalizacao
			<input type="number" maxlength="4" name="dt_fim">
			<input type="submit" value="enviar">
		</form>
	</div>
	<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>