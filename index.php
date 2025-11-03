<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //declaração de variavel
        //comandos condicionais
        //comando de repetição

        $nome = "Erick";
        $nome1 = "Santos";
        $idade = 30;
        $altura = 1.70;
        $x = true;
        $y = false;
        define("BEMVINDO", "Bem Vindo ao website!")
        define("Banco", "Cliente")

        echo BEMVINDO;
        echo Banco;
        echo "Ola meu nome é $nome minha idade é $idade , minha altura $altura <br>"
        echo _var_dump($altura) . "</br>"

        echo "<h1> Olá mundoooooooooooooooooooooooooooooo! </h1>";
    
        function exibirNome($nome){
            echo "<br> meu nome é $nome"
        }

        echo exibirNome("Maria");

        function calcularMedia($nome, $nota1, $nota2, $nota3, $nota4){
            $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
            if ($media >= 7):
                echo "$nome foi aprovado com a media $media";
            else:
                echo "$nome foi reprovado";        
            endif
            return $media
        }
        $valor = calcularMedia("Bob",5,7,9,10);
    ?>
</body>
</html>