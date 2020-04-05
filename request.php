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
    
	if (isset($_GET['user'])) {
		if ($_GET['user']=="cadastro") {
			if ($_POST) {
		        if (!empty($_POST['password']) && $_POST['password'] == $_POST['passwordconf']) {
		            $u->cadastrar($_POST['name'],$_POST['sobrenome'], $_POST['email'], $_POST['password'], $_POST['nascimento']);
		            
		        }
		    }
		}
		if ($_GET['user']=="login") {
			if ($_POST) {
		        $u->logar($_POST['email'], $_POST['password']);	           
		    }
		}
		if ($_GET['user']=="check") {
			$u->verificarCadastro($_SESSION['cd_pessoa']);
		}
	}
	else if(isset($_GET['formacao'])){
		if ($_GET['formacao']=="cadastro") {
			if ($_POST) {
				$f->cadastrar($_POST['curso'], $_POST['dt_ini'], $_POST['dt_fim'], $_POST['insti'], $_POST['desc']);
			}
		}
	}
	else if(isset($_GET['exp'])){
		if ($_GET['exp']=="cadastro") {
			if ($_POST) {
				$e->cadastrar($_POST['nm_exp'], $_POST['empresa'], $_POST['dt_ini'] ,$_POST['dt_fim'] , $_POST['descr']);
			}
		}
	}
	else if(isset($_GET['hab'])){
		if ($_GET['hab']=="cadastro") {
			if ($_POST) {
				$h->cadastrar($_POST['nome'], $_POST['quali']);
			}
		}
	}
	else if(isset($_GET['ref'])){
		if ($_GET['ref']=="cadastro") {
			if ($_POST) {
				$telefone = (string) $_POST['telefone'];
				$r->cadastrar($_POST['nome'], $telefone, $_POST['cargo'], $_POST['inst']);
			}
		}
	}
?>