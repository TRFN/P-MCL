<?php
    function ctrl_admin_sessao($ctx){
        $ctx->app->adm_module = 1;
        echo json_encode($ctx->app);
    }
?>
