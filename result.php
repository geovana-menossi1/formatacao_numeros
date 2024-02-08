<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>result.php</title>
</head>
<style>
    .variavel{
        width: 62%;
        height: 150px;
    }
    .result{
        width: 100%;
        height: 250px;
    }
    .conteudo{
    width: 80%;
    height: 450px;
    background-color: black;
    box-shadow: 2px 2px 10px 0px black;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
<body>
    <main class="principal">
        <div class="conteudo">
            <div class="variavel">
                <?php 
                    echo "<h2><a href='number.php'><span class='material-symbols-outlined'style='position: relative; top: 3px; right: 8px'>
                    arrow_back
                    </span></a>Valores informados:</h2> <br>";

                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];

                    echo("<h2> $number1 e $number2</h2><br><br>");
                ?>
                <?php
                    if(isset($_POST['number1']) && isset($_POST['number2'])) {
                        $number1 = $_POST['number1'];
                        $number2 = $_POST['number2'];
                        
                        $soma = 0;
                        $soma2 = 0;

                        // Loop para somar o primeiro numero
                        for ($i = 1; $i <= $number1; $i++) {
                            $soma += $i;
                        }

                        // Loop para somar o segundo numero
                        for ($i = 1; $i <= $number2; $i++) {
                            $soma2 += $i;
                        }

                        $total = $soma + $soma2;

                        echo "<div class='result'><h2>A soma de todos os números dos dois valores é <h2> $total</div>";
                    } else {
                        echo "<div class='result'>Por favor, preencha ambos os valores.</div>";
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>