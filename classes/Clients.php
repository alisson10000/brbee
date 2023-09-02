<?php



class Clients extends Conexao {

    public function saveClient($company_id, $first_name, $last_name, $email, $phone, $mobile, $address, $zipcode, $userpic, $city, $hashed_password, $inactive, $access, $last_active, $last_login, $token, $language, $signature) {
        $consulta = "INSERT INTO `clients`(`id`, `company_id`, `first_name`, `last_name`, `email`, `phone`, `mobile`, `address`, `zipcode`, `userpic`, `city`, `hashed_password`, `inactive`, `access`, `last_active`, `last_login`, `token`, `language`, `signature`) VALUES (NULL,'$company_id','$first_name','$last_name','$email','$phone','$mobile','$address','$zipcode','$userpic','$city','$hashed_password','$inactive','$access','$last_active','$last_login','$token','$language','$signature')";
        $this->salvaOcorrencia($consulta);
    }

    public function updateClient($id, $company_id, $first_name, $last_name, $email, $phone, $mobile, $address, $zipcode, $userpic, $city, $hashed_password, $inactive, $access, $last_active, $last_login, $token, $language, $signature) {
        $consulta = "UPDATE `clients` SET `company_id`='$company_id',`first_name`='$first_name',`last_name`='$last_name',`email`='$email',`phone`='$phone',`mobile`='$mobile',`address`='$address',`zipcode`='$zipcode',`userpic`='$userpic',`city`='$city',`hashed_password`='$hashed_password',`inactive`='$inactive',`access`='$access',`last_active`='$last_active',`last_login`='$last_login',`token`='$token',`language`='$language',`signature`='$signature' WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteClient($id) {
        $consulta = "DELETE FROM `clients` WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryClient() {
        $consulta = "SELECT * FROM `clients` where id > 0";
        $atributos = ["id", "first_name"];
        return $this->listarEntidade($consulta, $atributos);
    }

}