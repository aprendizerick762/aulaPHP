<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //comando de condição if
    $numero=10;
    if($numero == 10):
        echo "é igual a 10"
    endif;

    //comando de condição de if - segunda forma
    if($numero == 10){
        echo "é igual a 20"
    }

    echo "<br>";
    echo "<br>";
    $numero=15;
    if($numero==10):
        echo "É igual a 10";
    else:
        echo "è diferente de 10";
    endif;

    if($numero == 10){
        echo "è igual a 10"
    } else {
        echo "è diferente de 10"
    }

    echo "<br>";
    echo "<br>";
    $numero=50;
    if($numero==10):
    elseif($numero<=9):
        echo "É menor ou igual a 9";
    else:
        echo "É maior que 10";
    endif;
    echo "<br>";
    if($numero == 10){
        echo "É igual a 10";
    } elseif ($numero <=9) {
        echo "É menor ou igual a 9";
    } else {
        echo "É maior que 10";
    }

    ?>

</body>
</html>