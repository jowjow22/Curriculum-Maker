<?php 
include_once("conexao.php");
	class User{
		public function cadastrar($nome, $email, $password, $nascimento){
			global $pdo;
			$sql= $pdo->prepare('SELECT cd_pessoa from tb_pessoa where nm_email= :l');
			$sql->bindValue(":l", $email);
			$sql->execute();
			if ($sql->rowCount() > 0) {
				echo "aaaaaaaaa";
				return false;
			}
			else{
			$sql= $pdo->prepare('INSERT into tb_pessoa (cd_pessoa, nm_nome, nm_email,nm_password,dt_nascimento) values(null,:nm,:ema,:pass,:dt)');
			$sql->bindValue(":nm",$nome);
			$sql->bindValue(":ema",$email);
			$sql->bindValue(":pass",md5($password));
			$sql->bindValue(":dt",$nascimento);
			$sql->execute();
				return true;
			}
		}
		public function logar($email, $password){
			global $pdo;
			$sql = $pdo->prepare('SELECT cd_pessoa FROM tb_pessoa WHERE nm_email = :l AND nm_password = :s');
			$sql->bindValue(":l",$email);
			$sql->bindValue(":s",md5($password));
			$sql->execute();
			if ($sql->rowCount() > 0) {
				$dados = $sql->fetch();
				session_start();
				$_SESSION['cd_pessoa'] = $dados['cd_pessoa'];
			}
			else{
				 echo "nao logou"; //nao foi possivel logar
			}
		}
	}

?>