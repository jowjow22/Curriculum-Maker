<?php 
session_start();
	if (!isset($_SESSION['cd_pessoa'])) {
		session_destroy();
		echo '<script>window.location="index.php"</script>';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stepperPlugin/css/mstepper.min.css">

</head>
<body>
			FORMACAO
		<form method="post" id="form-formacao">
			curso ou ensino:
			<input type="text" name="curso">
			instituicao de ensino:
			<input type="text" name="insti">
			ANO de inicio
			<input type="text" maxlength="4" name="dt_ini" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
			ANO de finalizaçao
			<input type="text" maxlength="4" name="dt_fim" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
			descricao(opcionao)
			<textarea name="desc"></textarea>
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

  <!-- *****MODALS END****** -->
	<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>

	<script type="text/javascript" src="stepperPlugin/js/mstepper.min.js"></script>
	<script type="text/javascript" src="js/home.js"></script>

	<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  	<script type="text/javascript" src="http://code.jquery.com/qunit/qunit-1.11.0.js"></script>

	<script type="text/javascript" src="jQuery-Mask-Plugin-master/test/sinon-1.10.3.js"></script>
  	<script type="text/javascript" src="jQuery-mask-Plugin-master/test/sinon-qunit-1.0.0.js"></script>

  	<script type="text/javascript" src="jQuery-mask-Plugin-master/src/jquery.mask.js"></script>
  	<script type="text/javascript" src="jQuery-mask-Plugin-master/testsjquery.mask.test.js"></script>
</body>
</html>