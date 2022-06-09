<?php

class Usuario
{

	private $conn;
	public $msgErro = "";

public function conectarBD(){

	global $conn;

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "geo_portfolio";

	try{
	$conn = new PDO("mysql:dbname=".$dbname.";host=".$servidor,$usuario,$senha);
	} catch (PDOException $e){
		$msgErro = $e->getMessage();
	}
}


public function cadastrar($nome, $email, $contato, $senha, $subscribe){
	global $conn;

	$sql = $conn->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
	$sql->bindValue(":e",$email);
	$sql->execute();
	
	if($sql->rowCount() > 0){
		return false;
	}else{
		$sql = $conn->prepare("INSERT INTO usuarios (nome, email, contato, senha, subscribe, created) VALUES (:nom, :ema, :con, :sen, :sub, NOW())");
		$sql->bindValue(":nom",$nome);
		$sql->bindValue(":ema",$email);
		$sql->bindValue(":con",$contato);
		$sql->bindValue(":sen",$senha);
		$sql->bindValue(":sub",$subscribe);
		$sql->execute();
		return true;
	}
}


public function login($email, $senha){
	global $conn;

	$sql = $conn->prepare("SELECT id, nome FROM usuarios WHERE email = :e AND senha = :s");
	$sql->bindValue(":e",$email);
	$sql->bindValue(":s",$senha);
	$sql->execute();
	if($sql->rowCount() > 0){
		$dado = $sql->fetch(PDO::FETCH_ASSOC);
		$status = session_status();
		if($status == PHP_SESSION_NONE){
			session_start();
	};
		$_SESSION{'id'} = $dado['id'];
		$_SESSION{'nome'} = $dado['nome'];
		return true;
	}else{
		return false;
	}
}


public function contato($nome, $email, $whatsapp, $subscribe, $assunto, $mensagem){
	global $conn;

	$sql = $conn->prepare("INSERT INTO contatos (nome, email, whatsapp, subscribe, assunto, mensagem, created) VALUES (:nom, :ema, :wha, :sub, :ass, :men, NOW())");
	$sql->execute();
	$sql->bindValue(":nom",$nome);
	$sql->bindValue(":ema",$email);
	$sql->bindValue(":wha",$whatsapp);
	$sql->bindValue(":sub",$subscribe);
	$sql->bindValue(":ass",$assunto);
	$sql->bindValue(":men",$mensagem);
	$sql->execute();
}


public function editar($id,$nome,$email,$contato,$subscribe){
	global $conn;

	$sql = $conn->prepare("SELECT * FROM usuarios WHERE id = :i");
	$sql->bindValue(":i",$id);
	$sql->execute();

	if($sql->rowCount() > 0){
		$sql = $conn->prepare("UPDATE usuarios SET nome='$nome', email='$email', contato='$contato', subscribe='$subscribe', modified=NOW() WHERE id='$id'");
		$sql->execute();
		return true;
	}else{
		return false;
	}
}


public function dadosdel(){
	global $conn;
		
	$usu_codigo = intval($_GET['id']);
	$sql_code = "DELETE FROM contatos WHERE id = '$usu_codigo'";
	$sql_query = $conn->query($sql_code) or die ($conn->error);
		
	if($sql_query){
	echo "<script>alert('Contato deletado.');location.href='../pages/consultaBanco.php?p=inicial';</script>";
	}else{
	echo "<script>alert('Não foi possível deletar o contato.');location.href='../pages/consultaBanco.php?p=inicial';</script>";
	}
}
	
public function dadosdel1(){
	global $conn;
	
	$usu_codigo = intval($_GET['id']);
	$sql_code = "DELETE FROM usuarios WHERE id = '$usu_codigo'";
	$sql_query = $conn->query($sql_code) or die ($conn->error);
		
	if($sql_query){
	echo "<script>alert('Usuário deletado.');location.href='../pages/consultaBanco.php?p=inicial';</script>";
	}else{
	echo "<script>alert('Não foi possível deletar o usuário.');location.href='../pages/consultaBanco.php?p=inicial';</script>";
	}
}


}
?>