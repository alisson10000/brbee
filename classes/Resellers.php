<?php

class Resellers extends Conexao {
    //put your code here
    
    public function saveResellers($reseller_id,$url,$ativo) {
        $consulta = "INSERT INTO resellers  VALUES (NULL, '$reseller_id','$url','$ativo')";

        $this->salvaOcorrencia($consulta);
    }

    public function updateResellers($id , $reseller_id,$url,$ativo) {
        $consulta = "UPDATE `resellers` SET `reseller_id`='$reseller_id',`url`='$url',`ativo`='$ativo' WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteResellers($id) {
        $consulta = "DELETE FROM `resellers` WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryResellers() {
        $consulta = "SELECT * FROM `resellers`";
        $atributos = ["id", "reseller_id"];
        return $this->listarEntidade($consulta, $atributos);
    }

    
    
    
}
