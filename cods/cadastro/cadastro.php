<?php
$cadastro = array(
		"Nome" => $_POST['nome'], 
		"Série" => $_POST['serie'], 
		"Curso" => $_POST['curso']);

	escrever($cadastro);

	function escrever($cadastro){
		$nomeArquivo = "cadastro.txt";
		$arquivo = fopen($nomeArquivo, 'a');
		foreach ($cadastro as $chave => $valor) {
			fwrite($arquivo, "$chave: $valor<br>");
		}
		fwrite($arquivo, "<br>");
		fclose($arquivo);
	}
?>	
<a href="index.php">Cadastrar outro</a>