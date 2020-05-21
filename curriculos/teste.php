<?php
session_start(); 
require_once("../classesPHP/conexao.php");
require_once("../classesPHP/user.php");
$c = new Conexao;
$c->conectar("db_curriculo","localhost","root", "");  
$u = new User;
global $pdo;
if (isset($_GET['cadCurriculo'])) {
	if ($_POST) {
		$nomeCurriculo = $_POST['nmCurriculo'];
		$uName = $_SESSION['cd_pessoa'];
		$conteudo = file_get_contents('curriculum-model-1.html');
		$pasta = 'user-'.$uName;
		$nome = "/$nomeCurriculo.html";
		if (is_dir($pasta)) {
		}
		else{
			mkdir($pasta,0777);
		}	
		
		if( $arquivo = fopen($pasta.$nome, 'a+')){
		fwrite($arquivo, $conteudo);
		fclose($arquivo);
		$caminho = $pasta.$nome;
		$sql2 = $pdo->prepare('INSERT INTO tb_curriculo VALUES (null,"'.$nome.'","'.$caminho.'",'.$uName.')');
		$sql2->execute();
		echo 1;
		}
		else{
			echo 0;
		}
	}
	if ($_GET['cadCurriculo']=="select") {
		
	}
}



?>