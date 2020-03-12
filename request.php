<?php 
require_once("classesPHP/conexao.php");
require_once("classesPHP/user.php");
$res='';
$c = new Conexao;
$c->conectar("db_curriculo","localhost","root", "");  
$u = new User;
    
	if (isset($_GET['user'])) {
		if ($_GET['user']=="cadastrar") {
			if ($_POST) {
		        if ($_POST['password'] == $_POST['passwordconf']) {
		            $u->cadastrar($_POST['name'], $_POST['email'], $_POST['password'], $_POST['nascimento']);
		            
		        }
		    }
		}
	}
?>