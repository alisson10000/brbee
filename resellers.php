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
        $resellers = new Resellers($_local, $_usuario, $_senha, $_banco);
        $resellers->conectar();
        $resellers->verificaConexao();
        $id = "2";
        $reseller_id = "2";
        $url = "lplplplp";
        $ativo = "S";
        //   $resellers->saveResellers($reseller_id,$url,$ativo);
       //$resellers->updateResellers($id , $reseller_id,$url,$ativo);
        //   $resellers->deleteResellers($id);
         $list = $resellers->queryResellers();
         
         ?>
         <table>

        <?php
        $list = $resellers->queryResellers();

        foreach ($list as $value) {

            echo "<tr><td>" . $value['id'] . "</td><td>" . $value['reseller_id'] . "</td></tr>";
        }
        ?> 

        </table>
         
         
        
    </body>
</html>
