<?php

class CompaniesMarkets extends Conexao{
   
     public function saveCompanyMarket($company_id, $name,$cnpj,$address,$telphone,$mobile,$city,$province,$status) {
        $consulta = "INSERT INTO `companies_markets` VALUES (NULL,'$company_id','$name','$cnpj','$address','$telphone','$mobile','$city','$province','$status')";
        $this->salvaOcorrencia($consulta);
    }

    public function updateCompanyMarket($id, $company_id, $name,$cnpj,$address,$telphone,$mobile,$city,$province,$status) {
        $consulta = "UPDATE companies_markets SET company_id='$company_id',name='$name',cnpj='$cnpj',address='$address',telphone='$telphone',mobile='$mobile',city='$city',province='$province',status='$status' WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteCompanyMarket($id) {
        $consulta = "DELETE FROM `companies_markets` WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryCompanyMarket() {
        $consulta = "SELECT * FROM `companies_markets` where id > 0";
        $atributos = ["id", "name"];
        return $this->listarEntidade($consulta, $atributos);
    }
    
    
    
}
