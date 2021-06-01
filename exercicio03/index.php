<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Exercicio 03</title>
</head>
<body>
<div class="container">
<form class="border p-3 mt-3"method="post" action="boasvindas.php">
    <h1>Informe seeus dados</h1>
  <div class="mb-3 col-md-6">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp" required>   
  </div >
  <div class="mb-3 col-md-1">
    <label for="exampleInputEmail1" class="form-label">Idade</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="idade" aria-describedby="emailHelp" required>   
  </div >
  <div class="mb-3">
    Sexo:
  </div>
  <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" value="masculino" id="disabledFieldsetCheck" checked>
        <label class="form-check-label" for="disabledFieldsetCheck">
          Masculino
        </label>
      </div>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" value="feminino" id="disabledFieldsetCheck">
        <label class="form-check-label" for="disabledFieldsetCheck">
          Feminino
        </label>
      </div>
    </div>
  <div>
  <button type="submit" class="btn btn-primary col-md-1">Enviar</button>
  </div>
  
</form>
</div>
</body>
</html>