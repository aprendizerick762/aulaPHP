<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "Variavel superglobal Server <br>"
    
    //Informações do servidor e do ambiente de execução

    //var_dump($_SERVER);

    echo "<br> <br>";
    // nome do arquivo script que está executando
    echo "Nome do arquivo: ". $_SERVER['SERVER_SELF'] . "<br>";
    //o nome do host do servidor em que o script atual é executado
    echo "Nome do host: " . $_SERVER['SERVER_NAME'] . "<br>";
    //Porta da máquina servidor
    echo "Porta da máquina servidora" . $_SERVER['SERVER_PORT'] . "<br>";
    //O diretorio raiz onde está o script atual
    echo "Diretorio: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";

    ?>
</body>
</html>