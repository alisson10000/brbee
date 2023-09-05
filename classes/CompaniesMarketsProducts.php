<?php

class CompaniesMarketsProducts extends Conexao {
    //put your code here
     
     public function saveCompanyMarketProduct( $company_id, $stock_id) {
        $consulta = "INSERT INTO `companies_markets_products` VALUES (NULL,'$company_id','$stock_id')";
        $this->salvaOcorrencia($consulta);
    }

    public function updateCompanyMarketProduct($id, $company_id, $stock_id) {
        $consulta = "UPDATE `companies_markets_products` SET `companie_id`='$company_id',`stock_id`='$stock_id' WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteCompanyMarketProduct($id) {
        $consulta = "DELETE FROM `companies_markets_products` WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryCompanyMarketProduct() {
        $consulta = "SELECT * FROM `companies_markets_products` where id > 0";
        $atributos = ["id", "companie_id"];
        return $this->listarEntidade($consulta, $atributos);
    }
    
}
