<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Metadados -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

        <!-- Icone da página -->
        <link rel="shortcut icon" type="imagem/x-icon" href="./assets/img/favicon.ico"/>

        <!-- Título da página -->
        <title>Multiplication Table</title>
    </head>

    <body>
        <h1>Tabuada</h1>
        <div class="box_form">
            <form action="index.php">
                <div>
                    <label for="num">Número:</label>
                    <input type="number" name="num" id="num" value="<?php echo (isset($_GET['num'])) ? $_GET['num'] : '' ?>" placeholder="Digite um número para consultar a tabuada">
                </div>
                <input type="submit" value="Consultar">
            </form>
            
            <div>
                <?php
                    if(!empty($_GET['num']))
                    {
                        echo "<hr>";
                        $number = $_GET['num'];
                        for($i=1; $i <=10; $i++)
                        {
                            echo "$i * $number = ".($i * $number);
                            echo "<br><br>";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>