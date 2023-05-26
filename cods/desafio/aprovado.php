<?php
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$genero = $_POST['genero'];

	if($genero=='fem'&&$idade < 25){
		$resultado = "$nome ACEITA";
	}else{
		$resultado = "NÃO ACEITA";
	}
?>

<script>
	alert("<?php echo $resultado ?>");
	window.location.href = "index.php";
</script>
