<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "projeto";
	$conexao = mysqli_connect($host, $user, $pass) or die("Falha ao conectar com o banco de dados.<br>".mysql_error());
	mysqli_select_db($conexao, $banco)or die("Falha ao selecionar o banco de dados.<br>". mysql_error());

	$nome = $_POST["username"];
	$senha = $_POST["password"];
	$confsenha = $_POST["confirm-password"];

	$nomeEsc = addslashes($nome);
	$senhaEsc = addslashes($senha);	
	$confsenhaEsc = addslashes($confsenha);

	setcookie('nome', $nome, time()+3600);//expira em uma hora
	setcookie('senha', $senha, time()+3600);//expira em uma hora

	if($senha == $confsenha){
		$sql = mysqli_query($conexao, "insert into usuarios (id, nome, senha) values (null, '$nomeEsc', md5('$senhaEsc'))") or die("Falha ao inserir dados no banco". mysql_error());
		echo "<script type='text/javascript'>alert('Seu cadastro foi realizado com sucesso!.');window.location='inicio.php';</script>";
	}else{
		echo "<script type='text/javascript'>alert('As senhas não são iguais. Tente novamente.');window.location='login.html';</script>";
	}


	
	

	
