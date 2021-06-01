<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Exercicio 02</title>
</head>

<body>
  <div class="container">
    <form class="border p-3 mt-3" method="post" action="parimpar.php">
      <h1>Verificar se o Número é Par ou Ímpar</h1>
      <div class="mb-3 col-md-1">
        <label for="exampleInputEmail1" class="form-label">Número</label>
        <input type="number" class="form-control" id="exampleInputEmail1" name="valor" aria-describedby="emailHelp" required>
      </div>
      <div>
        <button type="submit" class="btn btn-primary col-md-1">Verificar</button>
      </div>

    </form>
  </div>
</body>

</html>