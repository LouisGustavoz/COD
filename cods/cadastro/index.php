<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="body">
	<div class="nav">
		<p id="titulo">Cadastro EEEP WRA</p>
	</div>
	
	<main>
		<hr> 
		<div class="cadastro">
			<form action="cadastro.php" method="post">
				<label>Nome</label><br>
				<input type="text" name="nome" required><br>
				<label>Série</label><br>
				<input type="number" name="serie" min="1" max="3"><br>
				<label>Curso</label>
				<select name="curso">
					<option selected disabled>Selecione</option>
					<option value="Administração">Adm</option>
					<option value="DCC">DCC</option>
					<option value="Finanças">Finanças</option>
					<option value="Energias Renováveis">Energias</option>
					<option value="Informática">Info</option>
				</select><br><br>
				<button type="submit">Cadastrar</button>
			</form>
		</div>
	</main>
	<footer>
		<div class="alunos-cadastrados">
			<h3>Alunos cadastrados:</h3>
			<hr>
			<?php
			function exibir(){
				$nomeArquivo = "cadastro.txt";
				$arquivo = fopen($nomeArquivo, 'r');
				$tamanho = filesize($nomeArquivo);
				$dados = fread($arquivo, $tamanho);
				return $dados;
			}
			echo exibir();
			?>
		</div>
	</footer>
</body>
</html>