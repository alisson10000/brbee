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
        $appsChangelogs = new AppsChangelogs($_local, $_usuario, $_senha, $_banco);
        $appsChangelogs->conectar();
        $appsChangelogs->verificaConexao();
        $id = "15";
        $idapp = "3";
        $seq = "3";
        $version = "10.1";
        $changelog = "estudo";
  //      $appsChangelogs->saveAppsChangelogs($idapp, $seq, $version,$changelog);
 //       $appsChangelogs->updateAppsChangelogs($id,$idapp, $seq, $version,$changelog);
        $appsChangelogs->deleteAppsChangelogs($id);
        $list = $appsChangelogs->queryAppsChangelogs();
        ?>
        <table>

            <?php
       

            foreach ($list as $value) {

                echo "<tr><td>" . $value['id'] . "</td><td>" . $value['idapp'] ."</td><td>". $value['seq'] . "</td><td>" . $value['version'] ."</td><td>". mb_convert_encoding($value['changelog'],"UTF-8")."</td></tr>";
            }
            ?> 

        </table>
        
    </body>
</html>
