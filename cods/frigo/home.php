<?php
  include '../_functions/functions.php';
  session_start();
  $dados = lerArquivo('vendas.txt');
  $dados = explode('/', $dados);
  if(isset($_SESSION['user'])){
  	validarLogin();
  	if($_SESSION['log'] == false){
  		echo "Sessão expirada";
  		header('location:index.php');
  	} else{
?>
<h2>REGISTRO</h2>
<hr>
<p>Bem vindo <?=$_SESSION['user']?>
	<a href='sair.php'>(sair)</a>
</p> 
<form action="registro.php" method="post">
  <label>produto</label><br>
  <input required type="text" name="produto"><br>
  <label>valor</label><br>
  <input required type="text" name="valor">
  <button type="submit">registrar</button>
</form>
<hr>
<h2>HISTÓRICO DE VENDAS</h2>
<hr>
<table style='width:100%'>
	<tr>
		<td style='background-color:brown;color:white'>PRODUTO</td>
		<td style='background-color:brown;color:white'>VALOR</td>
		<td style='background-color:brown;color:white'>DATA</td>
	</tr>
	<?php for($i=0;$i<count($dados)-1;$i++) : ?>
		<tr>
			<td><?=$dados[$i]?></td>
			<td><?=$dados[++$i]?></td>
			<td><?=$dados[++$i]?></td>
		</tr>
	<?php endfor ?>
</table>
<?php	
		}
	}else{
		header('location:index.php');
	}
?>