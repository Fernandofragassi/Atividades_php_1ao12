<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Exercicio 06</title>
</head>

<body>
    <div class="container border mt-3">
        <form action="tabela.php" class="p-2" method="POST">
            <h1>Tabela de Imagens</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Preencha a Quantidade de Colunas:</label>
                <input type="number" class="form-control" name="coluna" min="1" max="5" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" class="btn btn-primary col-md-1">Enviar</button>
            <button type="reset" class="btn btn-warning col-md-1">Limpar</button>
        </form>
    </div>

</body>

</html>