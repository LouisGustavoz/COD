<?php
  include '../_functions/functions.php';
  session_start();
  $user = $_POST['user'];
  $senha = $_POST['senha'];
  
  $userV = lerArquivo('user.txt');
  $senhaV = lerArquivo('senha.txt');
  
  if($user == $userV) {
    if($senha == $senhaV){
      $_SESSION['user'] = $user;
      $_SESSION['uAcesso'] = time();
      header('location:home.php');
    } else {
      header('location:index.php');
    }
  } else{
    header('location:index.php');
  }
?>