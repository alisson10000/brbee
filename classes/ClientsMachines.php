<?php
class ClientsMachines extends Conexao {
    //put your code here
    public function saveClientMachine($client_id, $reseller_id, $datetime_add, $machine_id, $machine_code, $day_first_manifest, $total_resets, $ip, $last_update, $status, $order, $app_id, $app_version, $log, $totp, $totp_datetime, $totp_duedate, $totp_interval_days) {
        $consulta = "INSERT INTO `clients_machines` VALUES (NULL,'$client_id','$reseller_id','$datetime_add','$machine_id','$machine_code','$day_first_manifest','$total_resets','$ip','$last_update','$status','$order','$app_id','$app_version','$log','$totp','$totp_datetime','$totp_duedate','$totp_interval_days')";
        $this->salvaOcorrencia($consulta);
    }

    public function updateClientMachine($id, $client_id, $reseller_id, $datetime_add, $machine_id, $machine_code, $day_first_manifest, $total_resets, $ip, $last_update, $status, $order, $app_id, $app_version, $log, $totp, $totp_datetime, $totp_duedate, $totp_interval_days) {
        $consulta = "UPDATE `clients_machines` SET `client_id`='$client_id',`reseller_id`='$reseller_id',`datetime_add`='$datetime_add',`machine_id`='$machine_id',`machine_code`='$machine_code',`day_first_manifest`='$day_first_manifest',`total_resets`='$total_resets',`ip`='$ip',`last_update`='$last_update',`status`='$status',`order`='$order',`app_id`='$app_id',`app_version`='$app_version',`log`='$log',`totp`='$totp',`totp_datetime`='$totp_datetime',`totp_duedate`='$totp_duedate',`totp_interval_days`='$totp_interval_days' WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteClientMachine($id) {
        $consulta = "DELETE FROM `clients_machines` WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryClientMachine() {
        $consulta = "SELECT * FROM `clients_machines` where id > 0";
        $atributos = ["id", "client_id"];
        return $this->listarEntidade($consulta, $atributos);
    }

}
