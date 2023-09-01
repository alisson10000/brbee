<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        require './classes/Conexao.php';
        
        
        
        
        $conexao = new Conexao("localhost", "root", "", "sisvendare_brbee");
        
        $conexao->verificaConexao();
        
        ?>
    </body>
</html>
