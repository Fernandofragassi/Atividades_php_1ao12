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
        <form class="text-center border p-3 mt-3" method="post" action="parimpar.php">
            <h1>Resultado:</h1>
            <?php
            $valor1 = filter_input(INPUT_POST, "valor");
            if ($valor1 % 2 == 0) {
                echo ("<h3>$valor1 é par</h3>");
            } else {
                echo ("<h3>$valor1 é ímpar</h3>");
            }
            ?>
        </form>
    </div>
</body>

</html>