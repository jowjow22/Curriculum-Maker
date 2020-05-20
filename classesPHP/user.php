<?php 
include_once("conexao.php");
	class User{
		public function cadastrar($nome, $sobrenome, $email, $password, $nascimento){
			global $pdo;
			$sql= $pdo->prepare('SELECT cd_pessoa from tb_pessoa where nm_email= :l');
			$sql->bindValue(":l", $email);
			$sql->execute();
			if ($sql->rowCount() > 0) {
				echo 0;
			}
			else{
			$sql= $pdo->prepare('INSERT into tb_pessoa (cd_pessoa, nm_nome, nm_sobrenome, nm_email,nm_password,dt_nascimento) values(null,:nm,:snm,:ema,:pass,:dt)');
			$sql->bindValue(":nm",$nome);
			$sql->bindValue(":snm",$sobrenome);
			$sql->bindValue(":ema",$email);
			$sql->bindValue(":pass",md5($password));
			$sql->bindValue(":dt",$nascimento);
			$sql->execute();
				echo 1;
			}
		}
		public function logar($email, $password){
			global $pdo;
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
		public function verificarCadastro($id){
			global $pdo;
			$sql = $pdo->prepare('SELECT img_foto, nm_profissao, ds_objetivo, nr_telefone, url_website, ds_endereco FROM tb_pessoa WHERE cd_pessoa = :id');
			$sql->bindValue(":id",$id);
			$sql->execute();
			$data = $sql->fetch();
			if(empty($data['img_foto']) || empty($data['nm_profissao']) || empty($data['ds_objetivo']) || empty($data['nr_telefone']) || empty($data['url_website']) || empty($data['ds_endereco'])){
				echo 1;
			}
			else{
				echo 0;
			}
		}
		public function selUserData($id){
			global $pdo;
			if (!empty($id)) {
			$sql = $pdo->prepare('SELECT * FROM tb_pessoa WHERE cd_pessoa = :id');
			$sql->bindValue(":id", $id);
			$sql->execute();
			}
			else{
			$sql = $pdo->prepare('SELECT * FROM tb_pessoa');
			$sql->execute();
			}
			return $sql;
		}
		public function updateData($id, $imgP, $imgC, $profissao, $objetivo, $telefone, $website, $endereco){
			global $pdo;
			try{
			$sql = $pdo->prepare('UPDATE tb_pessoa SET img_fotoPerfil = :imgP,img_fotoCapa = :imgC, nm_email = :em, nm_profissao = :prof, ds_objetivo = :obj, nr_telefone = :tel, url_website = :site, ds_endereco = :en WHERE cd_pessoa = :id');
			$sql->bindValue(":id", $id);
			$sql->bindValue(":imgP", $imgP);
			$sql->bindValue(":imgC", $imgC);
			$sql->bindValue(":em", $email);
			$sql->bindValue(":prof", $profissao);
			$sql->bindValue(":obj", $objetivo);
			$sql->bindValue(":tel", $telefone);
			$sql->bindValue(":site", $website);
			$sql->bindValue(":en", $endereco);
			$sql->execute();
		}
		catch(Exception $e)
		{
   		 echo $e->getMessage();
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