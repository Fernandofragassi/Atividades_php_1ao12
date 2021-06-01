<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Exercicio 6</title>
</head>
<body>
    <div class="container border mt-3">
        <h1 class="text-center">Tabela de imagens</h1>
        <table class="table text-center">
        <?php   
            $colunas = $_POST['coluna'];
            $a = 0;
            for($i=1 ; $i < 20 ; $i++){
                if($a == 0){
                    echo '<tr>';                    
                }
                $a++;
                echo '<th><img src="Imagens/' . $i . '.png"/></th>';
                if($a == $colunas){
                    echo '</tr>';
                    $a = 0;
                }
            }

        ?>        
        </table>
        <button class="mb-2 btn btn-primary mt-2" onclick="history.go(-1)">Voltar</button>
        
    </div>
</body>
</html>
