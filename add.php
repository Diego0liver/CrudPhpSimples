<?php
require 'config.php';

$titulo = filter_input(INPUT_POST, 'titulo');
$descricao = filter_input(INPUT_POST, 'descricao');
$ativo = filter_input(INPUT_POST, 'ativo');

if($titulo && $descricao && $ativo){

  $sql = $pdo->prepare("INSERT INTO vaga (titulo,descricao,ativo) VALUES (:titulo, :descricao, :ativo)");
  $sql->bindValue(':titulo', $titulo);
  $sql->bindValue(':descricao', $descricao);
  $sql->bindValue(':ativo', $ativo);
  $sql->execute();

  
  }else{
    header("Location: adicionar.php");
    exit;
}