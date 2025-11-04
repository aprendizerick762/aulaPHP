<?php
    //Usar sempre para manipular sessão
    session_start();

    $_SESSION["id"] = "123456";
    $_SESSION["usuario"] = "chamyto";

    echo "id: " . $_SESSION["id"] . "<br> login: " . $_SESSION["usuario"] . "<br> " . session_id();


?>