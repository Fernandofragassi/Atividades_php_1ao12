<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Exercicio 01</title>
</head>

<body>
    <div class="container mt-3">
        <form class="container border" method="POST" action="Maior.php">
            <h1>Verificar o maior número</h1>
            <div class="mb-3 col-md-1">
                <label for="exampleInputEmail1" class="form-label">Valor 1</label>
                <input type="number" name="valor1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3 col-md-1">
                <label for="exampleInputPassword1" class="form-label">Valor 2</label>
                <input type="Number" name="valor2" class="form-control" id="exampleInputPassword1" required>
            </div>
            <button type="submit" class="mb-2 btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>