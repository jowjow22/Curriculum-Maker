<?php 	
include_once("conexao.php");
include_once("user.php");

	class Referencia 
	{
		public function cadastrar($nome, $telefone, $cargo, $inst)
		{
			global $pdo;
			$sql= $pdo->prepare("SELECT cd_pessoa from tb_pessoa where cd_pessoa=:cd");
			$sql->bindValue(":cd", $_SESSION['cd_pessoa']);
			$sql->execute();
			$userData= $sql->fetch();
			$cdUser= $userData['cd_pessoa'];

			$sql = $pdo->prepare("SELECT cd_ref from tb_ref where nm_ref = :n and id_pessoa = :id ");
			$sql->bindValue(":n", $nome);
			$sql->bindValue(":id", $cdUser);
			$sql->execute();

			if ($sql->rowCount()>0) {
				echo 0;
			}
			
			else{
				$sql = $pdo->prepare("INSERT into tb_ref(nm_ref, nm_cargo, nm_inst, nr_telefone, id_pessoa) values(:n, :car, :ins, :tl, :id)");
				$sql->bindValue(":n", $nome);
				$sql->bindValue(":car", $cargo);
				$sql->bindValue(":ins", $inst);
				$sql->bindValue(":tl", $telefone);
				$sql->bindValue(":id", $cdUser);
				$sql->execute();
				echo 1;
			}
		}
	}
?>