<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>index.php</title>
</head>
<style>
.conteudo1{
    width: 80%;
    height: 450px;
    background-color: black;
    box-shadow: 2px 2px 10px 0px black;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.variavel{
    border-radius: 5px;
    border: 1px solid white;
    width: 62%;
    height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
</style>
<body>
    <main class="principal">
        <div class="conteudo1">
            <div class="variavel">
                <h3>Formatando Número<a href="number.php"><span class="material-symbols-outlined" 
                    style="position: relative; top: 5px; left: 5px">open_in_new</span></a></h3>
                <br>
                <?php 
                    $numero = 1437.25;
                    $numero_formatado = number_format($numero, 2, ',', ' ');
                    echo "<h4>R$ $numero_formatado</h4>";
                ?>
                <br>
                <br>
                <h3>Formatando Data</h3>
                <br>
                <?php 
                    date_default_timezone_set('America/Sao_Paulo');
                    
                    $hoje = date("Y:m:d");
                    $data_formatada = date("d/m/Y");  
                    echo "<h4>$data_formatada</h4>";
                ?>
            </div>
                
        </div>
    </main>
</body>
</html>