<?php 
include_once("conexao.php");
	class User{
		public function cadastrar($nome, $email, $password, $nascimento){
			global $pdo;
			$sql= $pdo->prepare('SELECT from tb_pessoa cd_pessoa where nm_email= :l');
			$sql->bindValue(":l", $emal);
			$sql->execute();
			if ($sql->rowCount()>0) {
				return false;
			}
			else{
			$sql= $pdo->prepare('INSERT into tb_pessoa (cd_pessoa, nm_nome, nm_email, nm_password, dt_nascimento) values(null,:nm, :ema, :pass, :dt)');
			$sql->bindValue(":nm",$nome);
			$sql->bindValue(":ema",$email);
			$sql->bindValue(":pass",md5($password));
			$sql->bindValue(":dt",$nascimento);
			$sql->execute();
				return true;
			}


		}
	}

?>