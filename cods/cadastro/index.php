<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link  rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
</head>
<div class="body">
	<main>
		<h3>Cadastro EEEP WRA</h3>
		<hr>
		<section class="img">
		<img src="../view/estudantes_sorrindo.jpg" class="img" style="linear-gradient(to bottom, transparent 0%, #fff 50%)"><br>
	</section>
	<div class="cadastro">
		<form action="cadastro.php" method="post">
			<label>Nome</label><br><input type="text" name="nome" required><br>
			<label>Série</label><br><input type="number" name="serie" min="1" max="3"><br>
			<label>Curso</label><br>
			<select name="curso">
				<option selected disabled>Selecione</option>
				<option value="Adiministração">Adm</option>
				<option value="DCC">DCC</option>
				<option value="Finanças">Finanças</option>
				<option value="Energias Renováveis">Energias</option>
				<option value="Informática">Info</option>
			</select>
			<button type="submit">Cadastrar</button>
		
			</form>
		</div>
	</main>
	<footer>
		<div class="alcadastro">
			<?php

			function exibir(){
			$nomeArquivo = "cadastro.txt";
			$arquivo = fopen($nomeArquivo, 'r');
			$tamanho = filesize($nomeArquivo);
			$dados = fread($arquivo, $tamanho);
			return $dados;
		}

		echo "<h3>Alunos cadastrados:</h3><hr>";
		echo exibir();
			?>
		</div>
	</footer>
</div>
</html>