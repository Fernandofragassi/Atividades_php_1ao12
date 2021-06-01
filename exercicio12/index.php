<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Exercicio 12</title>
</head>

<body>
    <div class="container border m-4 p-2 mx-auto">
        <h1 class="p-2 m-2 bg-info text-white text-center">Notícias sobre Tecnoligia</h1>
        <form action="listar.php" method="POST">
            <p>Assunto:
                <select name="noticias" class="form-select mt-4" aria-label="Default select example" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Mercado">Mercado</option>
                    <option value="Software">Software</option>
                </select>
            </p>
            <button type="submit" class="btn btn-primary mt-2">Procurar</button>
        </form>
    </div>
</body>

</html>