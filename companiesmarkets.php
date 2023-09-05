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
        $company_id = "11111";
        $name = "lima";
        $cnpj = "1111111";
        $address = "kjhgkjhg";
        $telphone = "111111";
        $mobile = "111111";
        $city = "hjklhlkjh";
        $province = "hlkhlkh";
        $status = "A";
        
        
     
        
        

    //    $companyMarket->saveCompanyMarket($company_id, $name, $cnpj, $address, $telphone, $mobile, $city, $province, $status);

   //     $companyMarket->updateCompanyMarket($id, $company_id, $name, $cnpj, $address, $telphone, $mobile, $city, $province, $status);
       
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
