<?php

class DepartmentCompanies extends Conexao {
    //put your code here
      public function saveDepartmentCompany($department_id, $companie_id, $active) {
        $consulta = "INSERT INTO `department_companies` (`id`, `dpartment_id`, `companie_id`, `active`) VALUES (NULL, '$department_id', '$companie_id', '$active');";

        $this->salvaOcorrencia($consulta);
    }

    public function updateDepartmentCompany($id,$department_id,$companie_id, $active) {
        $consulta = "UPDATE `department_companies` SET `dpartment_id`='$department_id',`companie_id`='$companie_id',`active`='$active' WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteDepartmentCompany($id) {
        $consulta = "DELETE FROM `department_companies` WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryDepartmentCompany() {
        $consulta = "SELECT * FROM `department_companies` where id > 0";
        $atributos = ["id", "dpartment_id"];
        return $this->listarEntidade($consulta, $atributos);
    }

}
