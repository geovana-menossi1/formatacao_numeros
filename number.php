<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>number.php</title>
</head>
<body>
    <main class="principal">
        <div class="conteudo">
            <div class="formulario">
                <form id="form" name="form" action="result.php" method="post">
                    <h2>Progressão Aritmética <a href="index.php"><span class="material-symbols-outlined" 
                    style="position: relative; top: 5px;">open_in_new</span></a></h2>

                    <label for="txtnumber">Digite o valor menor</label>
                    <input style='color: black; font-size: 14px; font-weight: bold' name="number1" id="number1" type="number">
                    <br>
                    <label for="txtnumber">Digite o valor maior</label>
                    <input style='color: black; font-size: 14px; font-weight: bold' ' name="number2" id="number2" type="number">
                    <br>
                    <div class="row"><button id="enviar">Enviar</button></div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>