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
        <?php
        $imagens = $_POST['grupoImagens'];
        ?>
        <h1 class="p-2 mt-2 bg-info text-white">Imagens de <?php echo ("$imagens") ?></h1>
        <div id='obj_carousel' class='carousel slide w-50 mx-auto' data-ride='carousel'>
            <ol class='carousel-indicators'>
                <?php
                $imagens = $_POST['grupoImagens'];
                for ($i = 0; $i < 5; $i++) {
                    if ($i === 0) {
                        echo ("<li data-target='#obj_carousel' data-slide-to='0' class='active'></li>");
                    } else {
                        echo ("<li data-target='#obj_carousel' data-slide-to='$i'></li>");
                    }
                }
                ?>
            </ol>
            <div class='carousel-inner'>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    if ($i === 1) {
                        echo ("<div class='carousel-item active'>");
                    } else {
                        echo ("<div class='carousel-item'>");
                    }
                    echo ("<img class='w-100' src='./Imagens/$imagens$i.jpg' alt='Imagem de GRUPO DA IMAGEM' /></div>");
                }
                ?>
                <a class='carousel-control-prev' href='#obj_carousel' role='button' data-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Anterior</span>
                </a>
                <a class='carousel-control-next' href='#obj_carousel' role='button' data-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Próximo</span>
                </a>
            </div>

        </div>
        <button class="btn btn-primary mt-2" onclick="history.go(-1)">Voltar</button>
    </div>

</body>

</html>