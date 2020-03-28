<?php 
include_once("conexao.php");
	class User{
		public function cadastrar($nome, $email, $password, $nascimento){
			global $pdo;
			$sql= $pdo->prepare('SELECT cd_pessoa from tb_pessoa where nm_email= :l');
			$sql->bindValue(":l", $email);
			$sql->execute();
			if ($sql->rowCount() > 0) {
				echo 0;
			}
			else{
			$sql= $pdo->prepare('INSERT into tb_pessoa (cd_pessoa, nm_nome, nm_email,nm_password,dt_nascimento) values(null,:nm,:ema,:pass,:dt)');
			$sql->bindValue(":nm",$nome);
			$sql->bindValue(":ema",$email);
			$sql->bindValue(":pass",md5($password));
			$sql->bindValue(":dt",$nascimento);
			$sql->execute();
				echo 1;
			}
		}
		public function logar($email, $password){


			$sql = $pdo->prepare('SELECT cd_pessoa FROM tb_pessoa WHERE nm_email = :l AND nm_password = :s');
			$sql->bindValue(":l",$email);
			$sql->bindValue(":s",md5($password));
			$sql->execute();
			if ($sql->rowCount() > 0) {
				session_destroy();
				session_start();
				$dados = $sql->fetch();
				$_SESSION['cd_pessoa'] = $dados['cd_pessoa'];
				echo 1;
			}
			else{
				 echo 0; //nao foi possivel logar
			}
		}
		public function atualizarTel($telefone){
			global $pdo;
			session_start();
			$sql= $pdo->prepare("SELECT cd_pessoa from tb_pessoa where cd_pessoa=:cd");
			$sql->bindValue(":cd", $_SESSION['cd_pessoa']);
			$sql->execute();
			$userData= $sql->fetch();
			$cdUser= $userData['cd_pessoa'];

			$sql = $pdo->prepare('SELECT cd_pessoa from tb_pessoa where nr_telefone = :t');
			$sql->bindValue(":t", $telefone);
			$sql->execute();
			if ($sql->rowCount()>0) {
				echo "telefone ja cadastrado";
			}
			else{
				$sql= $pdo->prepare('UPDATE tb_pessoa set nr_telefone = :t where cd_pessoa = :cd');
				$sql->bindValue(":t", $telefone);
				$sql->bindValue(":cd", $cdUser);
				$sql->execute();
			}
		}
	}

?>