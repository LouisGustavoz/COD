<?php
	function gerarFormulario($campos, $url){
		echo "<form action='$url' method='post'>";
		foreach($campos as $valor){
			echo "<label style='text-transform:uppercase'>$valor</label><br>";
			echo "<input type='text' name='$valor'>";
			echo "<br>";
		}
		echo "<br>";
		echo "<button type='submit'>Enviar</button>";
	}

	function validarLogin(){
		if(time() - $_SESSION['uAcesso'] <= 60){
			$_SESSION['log'] = true;
			$_SESSION['uAcesso'] = time();
		} else{
			$_SESSION['log'] = false;
			session_unset();
			session_destroy();
		}
	}

  function lerArquivo($nomeArquivo){
		$arquivo = fopen($nomeArquivo, 'r');
		$tamanho = filesize($nomeArquivo);
		$dados = fread($arquivo, $tamanho);
		return $dados;
	}

  function escreverArquivo($nomeArquivo, $conteudo){
		$arquivo = fopen($nomeArquivo, 'a');
		fwrite($arquivo, $conteudo);
		fclose($arquivo);
	}

	function criarArquivo($nomeArquivo, $conteudo){
		$arquivo = fopen($nomeArquivo, 'w');
		fwrite($arquivo, $conteudo);
		fclose($arquivo);
	}
?>