<?php
    function ctrl_admin_sessao($ctx){
        $contas = new sessoes("contas_painel", true);

        // $contas->criar_conta(array(
        //     "email" => "testes@gmail.com",
        //     "senha" => "54321"
        // ));
        //

        // $contas->criar_conta(array(
        //     "email" => "tulio.nasc95@gmail.com",
        //     "senha" => "12345"
        // ));

        // if(!$contas->login(array(
        //     "email" => "tulio.nasc95@gmail.com",
        //     "senha" => "12345"
        // ))){
        //     switch($contas->erros->login){
        //         case "conta_inexistente":
        //             echo "conta não existe\n";
        //         break;
        //         case "senha_incorreta":
        //             echo "senha incorreta\n";
        //         break;
        //     }
        // }

        // $contas->logout();

        if($contas->conectado()){
            // $contas->apagar_conta(2);
            // $contas->alterar_dado(array("email" => "bolinhodearroz@gmail.com"));
            echo json_encode($contas->conexao());
        } else {
            echo "desconectado";
        }
    }
?>
