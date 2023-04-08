<?php
require 'config.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM vaga");
if($sql->rowCount()>0){
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
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
    <a href='adicionar.php'>
    <button class='btn btn-primary'>
       Novo cliente
    </button>    
    </a>  
   </div>
   

<table class="table table-dark table-striped container mt-4"  width="100%" >
<tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Telefone</th>
    <th>Acao</th>
</tr>
<?php foreach($lista as $usuario):?>
    <tr>
    <td><?=$usuario['nome']; ?></td>
    <td><?=$usuario['email']; ?></td>
    <td><?=$usuario['telefone']; ?></td>
    <td> 
    <a href="editor.php?id=<?=$usuario['id'];?>">
    <button class='btn btn-primary'>
    Editar
    </button></a>
    
        <a href="exclui.php?id=<?=$usuario['id'];?>"
        onclick="return confirm('Deseja exclui contato?') ">
        <button class='btn btn-danger'>
       Exluir
      </button></a>
    </td>
</tr>
<?php endforeach; ?>    

</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
