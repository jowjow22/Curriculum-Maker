<?php 
	
	class Conexao{
		private $pdo;
		public function conectar($nome, $host, $usuario, $senha){
			global $pdo;
			try{
				$pdo= new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
			}catch(PDOException $e){
				$msgErro = $e->getMessage();
			}
		}
	}
?>
