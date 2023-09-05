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

        $companyMarket = new CompaniesMarkets($_local, $_usuario, $_senha, $_banco);
        $companyMarket->conectar();
        $companyMarket->verificaConexao();

        /*
         * Essas variáveis receberão valores de um formulário
         * 
         * 
         */

        $id = "2";
        $company_id = "6546";
        $name = "meliza";
        $cnpj = "54654564";
        $address = "NULL";
        $telphone = "654654";
        $mobile = "654654";
        $city = "1321231";
        $province = "23132112";
        $status = "A";
        
        
     
        
        

  //      $companyMarket->saveCompanyMarket($company_id, $name, $cnpj, $address, $telphone, $mobile, $city, $province, $status);
//
//        $companyMarket->updateClient($id, $company_id, $first_name, $last_name, $email, $phone, $mobile, $address, $zipcode, $userpic, $city, $hashed_password, $inactive, $access, $last_active, $last_login, $token, $language, $signature);
//       
   //      $companyMarket->deleteCompanyMarket($id);
        ?>

        <table>

        <?php
        $list = $companyMarket->queryCompanyMarket();

        foreach ($list as $value) {

            echo "<tr><td>" . $value['id'] . "</td><td>" . $value['name'] . "</td></tr>";
        }
        ?> 

        </table>
    </body>
</html>
