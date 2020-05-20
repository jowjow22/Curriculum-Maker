<?php
require_once("classesPHP/conexao.php");
require_once("classesPHP/user.php");
require_once("classesPHP/formacao.php");
require_once("classesPHP/experiencia.php");
require_once("classesPHP/habilidade.php");
require_once("classesPHP/referencia.php");
$c = new Conexao;
$c->conectar("db_curriculo","localhost","root", "");  
$u = new User;
$f= new Formacao;
$e= new Experiencia;
$h= new Habilidade;
$r= new Referencia;


if (isset($_GET['data'])) {
	if (isset($_GET['users'])) {
	$sql = $u->selUserData($_SESSION['cd_pessoa']);
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	$jsonData = json_encode($result);
	echo $jsonData;
	}
}

?>