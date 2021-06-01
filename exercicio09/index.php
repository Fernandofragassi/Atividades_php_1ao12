<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Exercicio 09</title>
</head>

<body>
    <div class="container border m-4 p-4 mx-auto">
        <h1 class="p-2 mt-2 bg-info text-white">Carrosel de imagens</h1>
        <form action="detalhes.php" method="POST">
            <p>Grupo de imagens:
                <select name="grupoImagens" class="form-select" aria-label="Default select example" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="Animais">Animais</option>
                    <option value="Cidades">Cidades</option>
                    <option value="Flores">Flores</option>
                    <option value="Florestas">Florestas</option>
                </select>
            </p>
            <button type="submit" class="btn btn-primary mt-2">Enviar</button>
        </form>
    </div>
</body>

</html>