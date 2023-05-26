<?php
	include '../_functions/functions.php';
	$user = $_POST['user'];
	$senha = $_POST['senha'];
	
	criarArquivo('user.txt', $user);
	criarArquivo('senha.txt', $senha);
	criarArquivo('vendas.txt', '///');

	header('location:index.php');
?>