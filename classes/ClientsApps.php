<?php

class ClientsApps extends Conexao{
    //put your code here
     public function saveClientsApps($market_id,$client_id,$client_id_machine_id,$app_id,$billing_amount,$billing_interval,$version_client,$get_update,$force_update,$blocked) {
        $consulta = "INSERT INTO clients_apps  VALUES (NULL, '$market_id','$client_id','$client_id_machine_id','$app_id','$billing_amount','$billing_interval','$version_client','$get_update','$force_update','$blocked')";

        $this->salvaOcorrencia($consulta);
    }

    public function updateClientsApps($id , $market_id,$client_id,$client_id_machine_id,$app_id,$billing_amount,$billing_interval,$version_client,$get_update,$force_update,$blocked) {
        $consulta = "UPDATE `clients_apps` SET `market_id`='$market_id',`client_id`='$client_id',`client_id_machine_id`='$client_id_machine_id',`app_id`='$app_id',`billing_amount`='$billing_amount',`billing_interval`='$billing_interval',`version_client`='$version_client',`get_update`='$get_update',`force_update`='$force_update',`blocked`='$blocked' WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteClientsApps($id) {
        $consulta = "DELETE FROM `clients_apps` WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryClientsApps() {
        $consulta = "SELECT * FROM `clients_apps`";
        $atributos = ["id", "market_id"];
        return $this->listarEntidade($consulta, $atributos);
    }

    
}
