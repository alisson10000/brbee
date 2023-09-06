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

        $companyStock = new CompaniesStock($_local, $_usuario, $_senha, $_banco);
        $companyStock->conectar();
        $companyStock->verificaConexao();

        /*
         * Essas variáveis receberão valores de um formulário
         * 
         * 
         */

        $id = "2";
        $department_id = "9";
        $date_add = "2023-09-06 13:35:34";
        $reference = "1";
        $gtin = "5";
        $description = "aaa";
        $description_short = "3";
        $sales_unit = "tn";
        $sales_price = "2";
        $stock_quantity = "3";
        $fractional_sale = "Y";
        $active = "N";
        $sync_completed = "N";
        $last_sync = "2023-09-06 13:35:34";

        //    $companyStock->saveCompanyStock($department_id, $date_add, $reference, $gtin, $description, $description_short, $sales_unit, $sales_price, $stock_quantity, $fractional_sale, $active, $sync_completed, $last_sync);
        //     $companyStock->updateCompanyStock($id, $department_id, $date_add, $reference, $gtin, $description, $description_short, $sales_unit, $sales_price, $stock_quantity, $fractional_sale, $active, $sync_completed, $last_sync);
        //   $companyStock->deleteCompanyStock($id);
        ?>

        <table>

            <?php
            $list = $companyStock->queryCompanyStock();

            foreach ($list as $value) {

                echo "<tr><td>" . $value['id'] . "</td><td>" . $value['department_id'] . "</td></tr>";
            }
            ?> 

        </table>
    </body>
</html>
