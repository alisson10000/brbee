<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of CompaniesStock
 *
 * @author alisson
 */
class CompaniesStock extends Conexao {
    //put your code here
     public function saveCompanyStock($department_id, $date_add, $reference, $gtin, $description, $description_short, $sales_unit, $sales_price, $stock_quantity, $fractional_sale, $active, $sync_completed, $last_sync) {
        $consulta = "INSERT INTO `companies_stock` VALUES (NULL,'$department_id','$date_add','$reference','$gtin','$description','$description_short','$sales_unit','$sales_price','$stock_quantity','$fractional_sale','$active','$sync_completed','$last_sync')";

        $this->salvaOcorrencia($consulta);
    }

    public function updateCompanyStock($id,$department_id, $date_add, $reference, $gtin, $description, $description_short, $sales_unit, $sales_price, $stock_quantity, $fractional_sale, $active, $sync_completed, $last_sync) {
        $consulta = "UPDATE `companies_stock` SET `department_id`='$department_id',`date_add`='$date_add',`reference`='$reference',`gtin`='$gtin',`description`='$description',`description_short`='$description_short',`sales_unit`='$sales_unit',`sales_price`='$sales_price',`stock_quantity`='$stock_quantity',`fractional_sale`='$fractional_sale',`active`='$active',`sync_completed`='$sync_completed',`last_sync`='$last_sync' WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteCompanyStock($id) {
        $consulta = "DELETE FROM `companies_stock` WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryCompanyStock() {
        $consulta = "SELECT * FROM `companies_stock` where id > 0";
        $atributos = ["id", "department_id"];
        return $this->listarEntidade($consulta, $atributos);
    }

}
