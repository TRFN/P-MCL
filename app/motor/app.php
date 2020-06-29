<?php
    $app = new motor();

    $app->dirAdd("/home", array(
        "layout" => "home/helloworld",
        "controle" => false,
        "modelo" => "template-principal"
    ));

    $app->dirAdd("/home/teste", array(
        "layout" => "home/teste-de-pagina",
        "controle" => false,
        "modelo" => "template-principal"
    ));

    $app->MIMESet("js","application/javascript");
    $app->MIMESet("css","text/css");
?>
