<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula php</title>
</head>
<body>
<?php
        //Array indexixados - indice é atribuido automaticamente
        $lista = array("Marta",10,10.5);
        var_dump($lista);
        echo "<br>  <br>". $lista[0];

        //array indexado manualmente
        $carros = array(4=>"BMW", 2=>"Veloster", 3=>"Hilux");
        echo "<br> <br>";
        var_dump($carros);

        //opreraçao para adicionar um item ao array - é adicionado no final do array
        $carros[] = "Amarok";
        echo "<br>";
        var_dump($carros);

        // adicionar no inicio
        array_unshift($carros, 'Celta');
        echo "<br>";
        var_dump($carros);


        //remoção de itens do array
        unset($carros[5])
        echo "<br>";
        var_dump($carros);

        $clientes = ["João", "Pedrin", "Carlin", "Ana"];
        echo "<br>";
        echo "Quantidade", count($clientes);
        sort($clientes);
        echo "<br>";
        var_dump($clientes);

        //Percorrendo um array
        foreach($clientes as $indice => $valor){
            echo $indice . "-" . $valor . "<br>";
        }



    ?>    
</body>
</html>