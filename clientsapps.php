<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './classes/Conexao.php';
        echo 'teste';
        $_local = "localhost";
        $_usuario = "root";
        $_senha = "";
        $_banco = "sisvendare_brbee";

        $clientApps = new ClientsApps($_local, $_usuario, $_senha, $_banco);
        $clientApps->conectar();
        $clientApps->verificaConexao();

        /*
         * Essas variáveis receberão valores de um formulário
         * 
         * 
         */
        $id = "3";
        $market_id = "2";
        $client_id = "2";
        $client_id_machine_id = "2";
        $app_id = "2";
        $billing_amount = "3";
        $billing_interval = "kl";
        $version_client = "io";
        $get_update = "Y";
        $force_update = "Y";
        $blocked = "Y";

      //  $clientApps->saveClientsApps($market_id, $client_id, $client_id_machine_id, $app_id, $billing_amount, $billing_interval, $version_client, $get_update, $force_update, $blocked);

  //      $clientApps->updateClientsApps($id, $market_id, $client_id, $client_id_machine_id, $app_id, $billing_amount, $billing_interval, $version_client, $get_update, $force_update, $blocked);

  //      $clientApps->deleteClientsApps($id);
        ?>

        <table>

            <?php
            $list = $clientApps->queryClientsApps();

            foreach ($list as $value) {

                echo "<tr><td>" . $value['id'] . "</td><td>" . $value['market_id'] . "</td></tr>";
            }
            ?> 

        </table>
    </body>
</html>
