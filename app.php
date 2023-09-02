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

        $app_id = "1";
        $appname = "teste";
        $version = "2.0";
        $url = "a";
        $licensing_url = "a";
        $dependencies = "a";
        $md5 = "a";
        $active = "Y";

        $app = new App($_local, $_usuario, $_senha, $_banco);
        $app->conectar();
        $app->verificaConexao();

        //  $app->saveApp($appname, $version, $url, $licensing_url, $dependencies, $md5, $active);
        //   $app->updateCompany($app_id, $appname, $version, $url, $licensing_url, $dependencies, $md5, $active);
        //  $app->deleteCompany($app_id);
        
        
        $list = $app->queryApp();
        ?> 
        <table>
            <?php
            foreach ($list as $value) {
                ?>
                <tr>
                    <td><?php echo $value['app_id']; ?></td>
                    <td><?php echo $value['appname'] ?></td>


                </tr>
                <?php
            }
            ?>
        
        
        
        
        
      
    </body>
</html>
