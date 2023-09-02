<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './classes/Conexao.php';
        $_local = "localhost";
        $_usuario = "root";
        $_senha = "";
        $_banco = "sisvendare_brbee";

        $id = "15";
        $reference = "123";
        $name = "MELIZA";
        $client_id = "NULL";
        $phone = "NULL";
        $mobile = "NULL";
        $address = "NULL";
        $zipcode = "";
        $city = "NULL";
        $inactive = "N";
        $website = "NULL";
        $country = "NULL";
        $vat = "NULL";
        $note = "NULL";
        $province = "";
        $twitter = "";
        $skype = "";
        $linkedin = "";
        $facebook = "";
        $instagram = "";
        $google_plus = "";
        $youtube = "";
        $pinterest = "";
        $terms = "NULL";
        $company_code = "NULL";
        $licensing_url = "NULL";
        $company = new Companies($_local, $_usuario, $_senha, $_banco);
        $company->conectar();
        $company->verificaConexao();
        //    $company->saveCompany($reference, $name, $client_id, $phone, $mobile, $address, $zipcode, $city, $inactive, $website, $country, $vat, $note, $province, $twitter, $skype, $linkedin, $facebook, $instagram, $google_plus, $youtube, $pinterest, $terms, $company_code, $licensing_url)
        //   $company->updateCompany($id,$reference, $name, $client_id, $phone, $mobile, $address, $zipcode, $city, $inactive, $website, $country, $vat, $note, $province, $twitter, $skype, $linkedin, $facebook, $instagram, $google_plus, $youtube, $pinterest, $terms, $company_code, $licensing_url)
        // $company->deleteCompany(2);
        ?>
    </body>
</html>
