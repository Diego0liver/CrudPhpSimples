<?php 
require 'config.php';

$info = [];
$id= filter_input(INPUT_GET, 'id');
if($id){
     $sql = $pdo->prepare("SELECT * FROM vaga WHERE id = :id");
     $sql->bindValue(':id', $id);
     $sql->execute();

     if($sql->rowCount()>0){
      $info = $sql->fetch(PDO::FETCH_ASSOC);

     }else{
        header("Location: adicionar.php");
        exit;
    }

}else{
    header("Location: adicionar.php");
    exit;
}
?>


<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.rtl.min.css" integrity="sha384-5/ZcxA7Dub2FNG09dHw8CHmPN7Fz6ASlweagj0nuXjmMyupgH9n9F5Hd926zsu3/" crossorigin="anonymous">

    <title>Lista de Cliente</title>
  </head>
  <body class="bg-dark text-light">
    <div class='container'>
      <div class="p-5 mb-4 bg-info rounded-3">
       <h1>Lista de Cliente</h1>
       <p>Lista de Cliente e informacoes</p>
    </div>

    <main class='container'>
<section>
<a href='index.php'>
    <button class='btn btn-primary'>
       Voltar
    </button>    
</a>    
</section>

<form method="POST" action="editar_salvar.php">
<input type='hidden' name="id" value="<?=$info['id'];?>"/>

    <label>Nome<br/>
        <input type="text" name="nome" value="<?=$info['nome'];?>" />
    </label><br/>

    <label>E-mail<br/>
        <input type="text" name="email" value="<?=$info['email'];?>"/>
    </label><br/>

    <label>Telefone<br/>
        <input type="number" name="telefone"  value="<?=$info['telefone'];?>"/>
    </label><br/>

    <div class="form-grup">
    <button type="submit"
    class="btn btn-success mt-3">Salvar</button>
 </div>

</form> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>