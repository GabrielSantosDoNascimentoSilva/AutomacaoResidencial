<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "projeto";
	$conexao = mysqli_connect($host, $user, $pass) or die("Falha ao conectar com o banco de dados.<br>".mysql_error());
	mysqli_select_db($conexao, $banco)or die("Falha ao selecionar o banco de dados.<br>". mysql_error());

	$nome = $_POST["username"];
	$senha = $_POST["password"];
	$nomeEscape = addslashes($nome);
	$senhaEscape = addslashes($senha);	
	setcookie('nomeCookie', $nome, time()+3600);//expira em uma hora


	$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE nome = '$nomeEscape' AND senha = md5('$senhaEscape')") or die("Falha ao consultar o banco de dados". mysql_error());
	$row = mysqli_num_rows($sql);

	if($row > 0){
		/*header("Location: http://www.google.com");*/
		header("Location: inicio.php");
	}else{
		echo "<script type='text/javascript'>alert('Usuário ou senha inválidos. Tente novamente.');window.location='index.html';</script>";

	}
?>
