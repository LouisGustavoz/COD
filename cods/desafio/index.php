<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aprovada</title>
	<style>
		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		form {
			width: 400px;
			padding: 20px;
			background-color: #f2f2f2;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
		}
		h2 {
			text-align: center;
			margin-bottom: 20px;
		}
		button{
			background-color: dimgrey;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>	
<body>
	<div class="container">
		<form action='aprovado.php' method='post'>
			<h2>Aprovada</h2>
			<label>Nome:</label>
			<input type ="text" name="nome"><br><br>
			<label>Idade:</label>
			<input type="number" name="idade"><br><br>
			<label>Gênero:</label>
			<select name="genero">
				<option selected disabled>Selecione</option>
				<option value="fem">Feminino</option>
				<option value="masc">Masculino</option>
				<option value="out">Outro</option>
			</select><br><br>
			<button type="submit">Enviar</button>
		</form>
	</div>
</body>
</html>