
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

<h2 class="mt-3">Nova vagas</h2>
<form method="POST" action="add.php">
 <div class="form-grup">
 <label>Nome<br/>
        <input type="text" name="nome" />
    </label><br/>
 </div>

 <div class="form-grup">
 <label>E-mail<br/>
        <input type="text" name="email" />
    </label><br/>
 </div>

 <div class="form-grup">
 <label>Telefone<br/>
        <input type="number" name="telefone" />
    </label><br/>
 </div>

 <div class="form-grup">
    <button type="submit"
    class="btn btn-success mt-3">Salvar</button>
 </div>
</form>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</main>    