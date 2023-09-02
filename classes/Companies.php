<?php

class Companies extends Conexao {

    //put your code here

    public function saveCompany($reference, $name, $client_id, $phone, $mobile, $address, $zipcode, $city, $inactive, $website, $country, $vat, $note, $province, $twitter, $skype, $linkedin, $facebook, $instagram, $google_plus, $youtube, $pinterest, $terms, $company_code, $licensing_url) {
        $consulta = "INSERT INTO companies  VALUES (NULL, '$reference','$name', '$client_id', '$phone', '$mobile', '$address', '$zipcode', '$city', '$inactive', '$website', '$country', '$vat', '$note', '$province', '$twitter', '$skype', '$linkedin', '$facebook', '$instagram', '$google_plus', '$youtube', '$pinterest', '$terms', '$company_code', '$licensing_url')";

        $this->salvaOcorrencia($consulta);
    }

    public function updateCompany($id,$reference, $name, $client_id, $phone, $mobile, $address, $zipcode, $city, $inactive, $website, $country, $vat, $note, $province, $twitter, $skype, $linkedin, $facebook, $instagram, $google_plus, $youtube, $pinterest, $terms, $company_code, $licensing_url) {
        $consulta = "UPDATE `companies` SET `reference`='$reference',`name`='$name',`client_id`='$client_id',`phone`='$phone',`mobile`='$mobile',`address`='$address',`zipcode`='$zipcode',`city`='$city',`inactive`='$inactive',`website`='$website',`country`='$country',`vat`='$vat',`note`='$note',`province`='$province',`twitter`='$twitter',`skype`='$skype',`linkedin`='$linkedin',`facebook`='$facebook',`instagram`='$instagram',`googleplus`='$google_plus',`youtube`='$youtube',`pinterest`='$pinterest',`terms`='$terms',`company_code`='$company_code',`licensing_url`='$licensing_url' WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteCompany($id) {
        $consulta = "DELETE FROM `companies` WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryCompany() {
        $consulta = "SELECT * FROM `companies` where id > 0";
        $atributos = ["id", "name"];
        return $this->listarEntidade($consulta, $atributos);
    }

}
