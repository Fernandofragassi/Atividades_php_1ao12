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
    <form class="container border mt-3 ">
        <h1>Resultado:</h1>
        <?php
        $valor1 = filter_input(INPUT_POST, "valor1");
        $valor2 = filter_input(INPUT_POST, "valor2");

        if ($valor1 < $valor2) {
            echo ("<h3>$valor1 é menor que $valor2</h3>");
        } elseif ($valor1 > $valor2) {
            echo ("<h3>$valor1 é maior que $valor2</h3>");
        } else {
            echo ("<h3>$valor1 é igual a $valor2</h3>");
        }
        ?>
    </form>
</body>

</html>