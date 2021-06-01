<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Exercicio 10</title>
</head>

<body>
    <div class="container border m-4 p-4 mx-auto">
        <h1 class="p-2 mt-2 bg-info text-white">Estados Brasileiros</h1>
        <form action="detalhes.php" method="POST">
            <p>Selecione os estados:
                <select name="grupoImagens" class="form-select" aria-label="Default select example" required>
                    <option value="" disabled selected>Selecione</option>
                    <?php
                    include "Matriz_Estados.inc";
                    for ($i = 0; $i < count($estados); $i++) {
                        echo ("<option value='$i'>" . $estados[$i][0] . "</option>");
                    }
                    ?>
                </select>
            </p>
            <button type="submit" class="btn btn-primary mt-2">Detalhar</button>
        </form>
    </div>
</body>

</html>