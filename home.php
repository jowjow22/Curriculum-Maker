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
		<form method="post" id="form-formacao">
			curso ou ensino:
			<input type="text" name="curso">
			instituicao de ensino:
			<input type="text" name="insti">
			data de inicio
			<input type="date" name="dt_ini">
			data de finalizaçao
			<input type="date" name="dt_fim">
			descricao(opcionao)
			<input type="text" name="desc">
			<input type="submit" value="enviar">
		</form>
	</div>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>