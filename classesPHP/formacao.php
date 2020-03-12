<?php 
include_once("conexao.php");
include_once("user.php");
	class Formacao
	{		
		public function cadastrar($curso, $anoI, $anoF, $insti, $desc)
		{
			global $pdo;
			$sql= $pdo->prepare("SELECT cd_pessoa from tb_pessoa where cd_pessoa=:cd");
			$sql->bindValue(":cd", $_SESSION['cd_user']);
			$sql->execute();
			$userData= $sql->fetch();
			$cdUser= $userData['cd_pessoa'];

			$sql = $pdo->prepare("SELECT cd_formacao from tb_formacao where nm_curso= :c and dt_anoini = :ai and dt_anofim = :af");
			$sql->bindValue(":c", $curso);
			$sql->bindValue(":ai", $anoI);
			$sql->bindValue(":af", $anoF);
			$sql->execute();
			if (rowCount()>0) {
				alert("voce faz merda o dia inteiro vitinho");
			}
			else{
				$sql = $pdo->prepare("INSERT into tb_formacao(nm_curso, nm_instituicao, dt_anoini, dt_anofim, ds_opcional, id_pessoa) values(:c, :i, :di, :df, :ds, :ip)");
				$sql->bindValue(":c", $curso);
				$sql->bindValue(":i", $insti);
				$sql->bindValue(":di", $anoI);
				$sql->bindValue(":df", $anoF);
				$sql->bindValue(":ds", $desc);
				$sql->bindValue(":ip", $cdUser);
				$sql->execute();
			}
		}
	}
?>