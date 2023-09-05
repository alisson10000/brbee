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

        $companyMarketProduct = new CompaniesMarketsProducts($_local, $_usuario, $_senha, $_banco);
        $companyMarketProduct->conectar();
        $companyMarketProduct->verificaConexao();

        /*
         * Essas variáveis receberão valores de um formulário
         * 
         * 
         */

        $id = "1";
        $company_id = "3";
        $stock_id = "3";
        
        
        
     
        
        

  //    $companyMarketProduct->saveCompanyMarketProduct($company_id, $stock_id);
//
       $companyMarketProduct->updateCompanyMarketProduct($id, $company_id, $stock_id);
//       
    //     $companyMarketProduct->deleteCompanyMarketProduct($id);
        ?>

        <table>

        <?php
        $list = $companyMarketProduct->queryCompanyMarketProduct();

        foreach ($list as $value) {

            echo "<tr><td>" . $value['id'] . "</td><td>" . $value['companie_id'] . "</td></tr>";
        }
        ?> 

        </table>
    </body>
    </body>
</html>
