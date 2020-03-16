<?php  
require_once('classesPHP/conexao.php');
require_once('classesPHP/referencia.php');

$c = new Conexao;
$r = new Referencia;
$c->conectar("db_curriculo","localhost","root", "");
	if ($_POST) {
		$telefine= (string) $_POST['test'];
		echo $telefine;
		$r->cadastrar()
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input class="simple-field-data-mask-selectonfocus" type="text" data-mask="(00) 00000-0000" data-mask-selectonfocus="true" name="test" />
		<input type="submit" value="aaaaaaaaaaaaaaaaaaaaaa">
	</form>
	<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  	<script type="text/javascript" src="http://code.jquery.com/qunit/qunit-1.11.0.js"></script>

	<script type="text/javascript" src="jQuery-Mask-Plugin-master/test/sinon-1.10.3.js"></script>
  	<script type="text/javascript" src="jQuery-mask-Plugin-master/test/sinon-qunit-1.0.0.js"></script>

  	<script type="text/javascript" src="jQuery-mask-Plugin-master/src/jquery.mask.js"></script>
  	<script type="text/javascript" src="jQuery-mask-Plugin-master/testsjquery.mask.test.js"></script>
</body>
</html>