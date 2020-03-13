<?php 
require_once("classesPHP/conexao.php");
require_once("classesPHP/user.php");
require_once("classesPHP/formacao.php");
$res='';
$c = new Conexao;
$c->conectar("db_curriculo","localhost","root", "");  
$u = new User;
$f= new Formacao;
    
	if (isset($_GET['user'])) {
		if ($_GET['user']=="cadastro") {
			if ($_POST) {
		        if ($_POST['password'] == $_POST['passwordconf']) {
		            $u->cadastrar($_POST['name'], $_POST['email'], $_POST['password'], $_POST['nascimento']);
		            
		        }
		    }
		}
		if ($_GET['user']=="login") {
			if ($_POST) {
		        $u->logar($_POST['email'], $_POST['password']);	           
		    }
		}
	}
	else if(isset($_GET['formacao'])){
		if ($_GET['user']=="cadastro") {
			if ($_POST) {
				$f->cadastrar($_POST['curso'], $_POST['dt_ini'], $_POST['dt_fim'], $_POST['insti'], $_POST['desc']);
			}
		}
	}
?>