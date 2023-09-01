<?php

class Clients extends Conexao {

    

    public function saveClient( $company_id, $first_name, $last_name, $email, $phone, $mobile, $address, $zipcode, $userpic, $city, $hashed_password, $inactive, $access, $last_active, $last_login, $token, $language, $signature) {

       $consulta = "INSERT INTO `clients`(`id`, `company_id`, `first_name`, `last_name`, `email`, `phone`, `mobile`, `address`, `zipcode`, `userpic`, `city`, `hashed_password`, `inactive`, `access`, `last_active`, `last_login`, `token`, `language`, `signature`) VALUES (NULL,'$company_id','$first_name','$last_name','$email','$phone','$mobile','$address','$zipcode','$userpic','$city','$hashed_password','$inactive','$access','$last_active','$last_login','$token','$language','$signature')";
      
    //   $consulta = "INSERT INTO `clients` (`id`, `company_id`, `first_name`, `last_name`, `email`, `phone`, `mobile`, `address`, `zipcode`, `userpic`, `city`, `hashed_password`, `inactive`, `access`, `last_active`, `last_login`, `token`, `language`, `signature`) VALUES (NULL, '$company_id', '$first_name', NULL, NULL, NULL, NULL, NULL, NULL, 'no-pic.png', NULL, NULL, 'N', '0', NULL, NULL, NULL, NULL, NULL)";
        
        
        $this->salvaOcorrencia($consulta);
    }
    


}
