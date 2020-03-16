<?php 
session_start();
	if (!isset($_SESSION['cd_pessoa'])) {
		echo '<script>window.location="index.php"</script>';
	}
	$tel ="";
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
		</form><hr>
			HABILIDADES
		<form method="post" id="form-hab">
			nome:
			<input type="text" name="nome">
			qualificaçao
			<input type="range" name="quali">
			<input type="submit" name="" min="0" max="100">	
		</form>
		<hr>
			REFERENCIAS	
		<form method="post" id="form-ref">
			nome:
			<input type="text" name="nome">
			profissao:
			<input type="text" name="profissao">
			telefone:
			<input class="simple-field-data-mask-selectonfocus"type="text"data-mask="(00) 00000-0000" data-mask-selectonfocus="true" name="telefone" />
			<input type="submit" name="" min="0" max="100">
			<?php 
				echo $tel;
			 ?>	
		</form>
	</div>
	<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  	<script type="text/javascript" src="http://code.jquery.com/qunit/qunit-1.11.0.js"></script>

	<script type="text/javascript" src="jQuery-Mask-Plugin-master/test/sinon-1.10.3.js"></script>
  	<script type="text/javascript" src="jQuery-mask-Plugin-master/test/sinon-qunit-1.0.0.js"></script>

  	<script type="text/javascript" src="jQuery-mask-Plugin-master/src/jquery.mask.js"></script>
  	<script type="text/javascript" src="jQuery-mask-Plugin-master/testsjquery.mask.test.js"></script>
</body>
</html>