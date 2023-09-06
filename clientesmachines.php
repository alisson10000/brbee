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
        // put your code here
        require './classes/Conexao.php';

        $_local = "localhost";
        $_usuario = "root";
        $_senha = "";
        $_banco = "sisvendare_brbee";

        $clientMachine = new ClientsMachines($_local, $_usuario, $_senha, $_banco);
        $clientMachine->conectar();
        $clientMachine->verificaConexao();

        /*
         * Essas variáveis receberão valores de um formulário
         * 
         * 
         */

        $id = "17";
        $client_id = "2";
        $reseller_id = "2";
        $datetime_add = "2023-09-06 19:52:53";
        $machine_id = "1";
        $machine_code = "1";
        $day_first_manifest = "1";
        $total_resets = "1";
        $ip = "1";
        $last_update = "2023-09-06 19:52:53";
        $status = "0";
        $order = "1";
        $app_id = "1";
        $app_version = "";
        $log = "Y";
        $totp = "1";
        $totp_datetime = "2023-09-06 19:52:53";
        $totp_duedate = "2023-09-06 19:52:53";
        $totp_interval_days = "45";

      //  $clientMachine->saveClientMachine($client_id, $reseller_id, $datetime_add, $machine_id, $machine_code, $day_first_manifest, $total_resets, $ip, $last_update, $status, $order, $app_id, $app_version, $log, $totp, $totp_datetime, $totp_duedate, $totp_interval_days);
      //  $clientMachine->updateClientMachine($id, $client_id, $reseller_id, $datetime_add, $machine_id, $machine_code, $day_first_manifest, $total_resets, $ip, $last_update, $status, $order, $app_id, $app_version, $log, $totp, $totp_datetime, $totp_duedate, $totp_interval_days);
    //    $clientMachine->deleteClientMachine($id);
        ?>

        <table>

            <?php
            $list =$clientMachine->queryClientMachine();

            foreach ($list as $value) {

                echo "<tr><td>" . $value['id'] . "</td><td>" . $value['client_id'] . "</td></tr>";
            }
            ?> 

        </table>
    </body>
</html>
