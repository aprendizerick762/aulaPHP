<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST</title>
</head>
<body>

"dados.php"

<?php
    if (inset($_POST['enviar-formulario'])):
    $idade = $_POST['txtidade']
    echo "idade= " . $_POST['txtidade']
endif;
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method=post>
        Nome: <input type="text" name="txtnome"><br>
        email: <input type="email" name="txtemail"> <br>
        Idade: <input type="text" name="txtidade"><br>
        <button type="submit" name="enviar-formulario"> Enviar </button>


        
    </form>    

</body>
</html>