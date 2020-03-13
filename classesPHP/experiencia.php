<?php 
include_once("conexao.php");
include_once("user.php");
	class Experiencia
	{
		public function cadastrar($servico, $empresa, $ano_ini, $ano_fim, $desc)
		{
			global $pdo;
			$sql= $pdo->prepare("SELECT cd_pessoa from tb_pessoa where cd_pessoa=:cd");
			$sql->bindValue(":cd", $_SESSION['cd_pessoa']);
			$sql->execute();
			$userData= $sql->fetch();
			$cdUser= $userData['cd_pessoa'];

			$sql = $pdo->prepare("SELECT cd_exp from tb_exp where nm_servico = :s and nm_empresa =:a and dt_anoini = :ai and dt_anofim = :af");
			$sql->bindValue(":s", $servico);
			$sql->bindValue(":a", $empresa);
			$sql->bindValue(":ai", $ano_ini);
			$sql->bindValue(":af", $ano_fim);
			$sql->execute();

			if ($sql->rowCount()>0) {
				echo "aaaaaaaaaaaa";
				return true;
			}
			
			else{
				$sql = $pdo->prepare("INSERT into tb_exp(nm_servico, nm_empresa, dt_anoini, dt_anofim, ds_descricao, id_pessoa) values(:s, :emp, :di, :df, :ds, :ip)");
				$sql->bindValue(":s", $servico);
				$sql->bindValue(":emp", $empresa);
				$sql->bindValue(":di", $ano_ini);
				$sql->bindValue(":df", $ano_fim);
				$sql->bindValue(":ds", $desc);
				$sql->bindValue(":ip", $cdUser);
				$sql->execute();
				return false;
			}
		}
	}
 ?>