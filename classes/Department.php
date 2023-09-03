<?php

class Department extends Conexao{
    //put your code here
    
    
    //put your code here

    public function saveDepartment(  $description) {
        $consulta = "INSERT INTO department  VALUES (NULL, '$description')";

        $this->salvaOcorrencia($consulta);
    }

    public function updateDepartment($id ,  $description) {
        $consulta = "UPDATE `department` SET `description`='$description' WHERE id=$id";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteDepartment($id) {
        $consulta = "DELETE FROM `department` WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryDepartment() {
        $consulta = "SELECT * FROM `department`";
        $atributos = ["id", "description"];
        return $this->listarEntidade($consulta, $atributos);
    }

}
