<?php
  include "../_functions/functions.php";
  $produto = $_POST['produto'];
  $valor = $_POST['valor'];
  date_default_timezone_set("America/Sao_Paulo");
  $tempo = date("d-m-y H:i:s");
  $conteudo = "$produto/$valor/$tempo/";
  escreverArquivo('vendas.txt', $conteudo);
  header('location:home.php');
?>