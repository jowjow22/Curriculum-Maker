<?php 	
include_once("conexao.php");
include_once("user.php");

	class Habilidade
	{
		
		public function cadastrar($nome, $quali)
		{
			global $pdo;
			$sql= $pdo->prepare("SELECT cd_pessoa from tb_pessoa where cd_pessoa=:cd");
			$sql->bindValue(":cd", $_SESSION['cd_pessoa']);
			$sql->execute();
			$userData= $sql->fetch();
			$cdUser= $userData['cd_pessoa'];

			$sql = $pdo->prepare("SELECT cd_hab from tb_hab where nm_hab = :n and id_pessoa = :id ");
			$sql->bindValue(":n", $nome);
			$sql->bindValue(":id", $cdUser);
			$sql->execute();

			if ($sql->rowCount()>0) {
				echo "aaaaaaaaaaaa";
				return true;
			}
			
			else{
				$sql = $pdo->prepare("INSERT into tb_hab(nm_hab, qt_hab, id_pessoa) values(:n, :qt, :id)");
				$sql->bindValue(":n", $nome);
				$sql->bindValue(":qt", $quali);
				$sql->bindValue(":id", $cdUser);
				$sql->execute();
				return false;
			}
		}
	}

?>