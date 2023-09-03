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
        // put your code here
        require './classes/Conexao.php';
        $_local = "localhost";
        $_usuario = "root";
        $_senha = "";
        $_banco = "sisvendare_brbee";
        $department = new Department($_local, $_usuario, $_senha, $_banco);
        $department->conectar();
        $department->verificaConexao();

        $id = "24";

        $description = "teste";

        //   $department->saveDepartment($description);
        //  $department->deleteDepartment($id);

        $list = $department->updateDepartment($id, $description);
        $list = $department->queryDepartment();
        ?>
        <table>
            <?php
            foreach ($list as $value) {

                echo "<tr><td>" . $value['id'] . "</td><td>" . $value['description'] . "</td></tr>";
            }
            ?>
        </table>

    </body>
</html>
