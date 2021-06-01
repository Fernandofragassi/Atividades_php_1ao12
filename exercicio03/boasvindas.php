<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Exercicio 03</title>
</head>
<body>
<div class="container">
<form class="border p-3 mt-3"method="post" action="parimpar.php">
    <?php
        $nome = filter_input(INPUT_POST,"nome");
        $idade = filter_input(INPUT_POST,"idade");
        $sexo = $_POST['sexo'];

        if($sexo == "masculino"){
            if($idade < 16){
            echo("
                <h3>Bem-vindo $nome !</h3>
                <h3>Seu voto é proibido!</h3>
                <input type='button' class='btn btn-primary col-md-1' value='Voltar' onClick='history.go(-1)'>

            ");
        }elseif($idade >= 16 & $idade <= 17){
            echo("
                <h3>Bem-vinda $nome !</h3>
                <h3>Seu voto é facultativo!</h3>
                <input type='button' class='btn btn-primary col-md-1' value='Voltar' onClick='history.go(-1)'>
            ");
        }elseif($idade >= 18 & $idade < 70){
            echo("
                <h3>Bem-vinda $nome !</h3>
                <h3>Seu voto é Obrigatorio!</h3>
                <input type='button' class='btn btn-primary col-md-1' value='Voltar' onClick='history.go(-1)'>
            ");
        }else{
            echo("
                <h3>Bem-vinda $nome !</h3>
                <h3>Seu voto é Opcional!</h3>
                <input type='button' class='btn btn-primary col-md-1' value='Voltar' onClick='history.go(-1)'>
            ");
        }}else{
            if($idade < 16){
                echo("
                    <h3>Bem-vinda $nome !</h3>
                    <h3>Seu voto é proibido!</h3>
                    <input type='button' class='btn btn-primary col-md-1' value='Voltar' onClick='history.go(-1)'>
                ");
            }elseif($idade >= 16 & $idade <= 17){
                echo("
                    <h3>Bem-vinda $nome !</h3>
                    <h3>Seu voto é facultativo!</h3>
                    <input type='button' class='btn btn-primary col-md-1' value='Voltar' onClick='history.go(-1)'>
                ");
            }elseif($idade >= 18 & $idade < 70){
                echo("
                    <h3>Bem-vinda $nome !</h3>
                    <h3>Seu voto é Obrigatorio!</h3>
                    <input type='button' class='btn btn-primary col-md-1' value='Voltar' onClick='history.go(-1)'>
                ");
            }else{
                echo("
                    <h3>Bem-vinda $nome !</h3>
                    <h3>Seu voto é Opcional!</h3>
                    <input type='button' class='btn btn-primary col-md-1' value='Voltar' onClick='history.go(-1)'>
                ");
            } 
        }            
        
    ?>
</form>
</div>
</body>
</html>
