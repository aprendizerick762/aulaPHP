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
    $erros = array();
        $idade = $_POST['txtidade'];
    echo "idade= " . $_POST['txtidade'];
    $nome = $_POST['txtnome'];
    $email = $_POST['txtemail'];
    //o sinal circunflexo significa q a correspodencia deve iniciar logo no primeiro caracter do texto
    $res = array("options" =>array ("regexp" => "/^[a-zA-Z]/"));
    if(! filter_var($nome, FILTER_VALIDATE_REGEXP, $res)){
        $erros[] = "Nome deve possuir somente letras [a-zA-Z].";
    }
    // == somente conteudo da vairavel
    // === conteudo + tipo
    if(filter_input(INPUT_POST, "txtidade", FILTER_VALIDATE_INT) === false){
        $erros[] = "Idade precisa ser um inteiro";
    }

    if(filter_input(INPUT_POST,"txtemail", FILTER_VALIDATE_EMAIL) === false){
        $erros[] = "Email Inválido";
    }
    if(filter_input(INPUT_POST,"txtaltura", FILTER_VALIDATE_FLOAT) === false){
        $erros[] = "Altura inválido";
    }
    if(filter_input(INPUT_POST,"txtEnderecoIP", FILTER_VALIDATE_IP) === false){
        $erros[] = 'IP invalido';
    }

    if(! empty($erros)){
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    }else{
        echo "Parabéns, seus dados estão corretos! ";
    }

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