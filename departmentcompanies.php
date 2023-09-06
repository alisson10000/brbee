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

        $departmentCompany = new DepartmentCompanies($_local, $_usuario, $_senha, $_banco);
        $departmentCompany->conectar();
        $departmentCompany->verificaConexao();

        /*
         * Essas variáveis receberão valores de um formulário
         * 
         * 
         */

        $id = "6";
        $department_id = "4";
        $companie_id = "4";
        $active = "Y";

        //    $departmentCompany->saveDepartmentCompany($department_id, $companie_id, $active);
        //        $departmentCompany->updateDepartmentCompany($id, $department_id, $companie_id, $active);
        //    $departmentCompany->deleteDepartmentCompany($id);
        ?>

        <table>

            <?php
            $list = $departmentCompany->queryDepartmentCompany();

            foreach ($list as $value) {

                echo "<tr><td>" . $value['id'] . "</td><td>" . $value['dpartment_id'] . "</td></tr>";
            }
            ?> 

        </table>
    </body>
</html>
