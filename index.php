<!DOCTYPE html>
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

        $client = new Clients($_local, $_usuario, $_senha, $_banco);
        $client->conectar();
        $client->verificaConexao();

        /*
         * Essas variáveis receberão valores de um formulário
         * 
         * 
         */

        $id = "38";
        $company_id = "6546";
        $first_name = "meliza";
        $last_name = "sarto";
        $email = "NULL";
        $phone = "NULL";
        $mobile = "NULL";
        $address = "NULL";
        $zipcode = "NULL";
        $userpic = "no-pic.png";
        $city = "NULL";
        $hashed_password = "NULL";
        $inactive = "N";
        $access = "0";
        $last_active = "NULL";
        $last_login = "NULL";
        $token = "NULL";
        $language = "NULL";
        $signature = "NULL";

//        $client->saveClient($company_id, $first_name, $last_name, $email, $phone, $mobile, $address, $zipcode, $userpic, $city, $hashed_password, $inactive, $access, $last_active, $last_login, $token, $language, $signature);
//
//        $client->updateClient($id, $company_id, $first_name, $last_name, $email, $phone, $mobile, $address, $zipcode, $userpic, $city, $hashed_password, $inactive, $access, $last_active, $last_login, $token, $language, $signature);
//       
        // $client->deleteClient($id);
        ?>

        <table>

        <?php
        $list = $client->query();

        foreach ($list as $value) {

            echo "<tr><td>" . $value['id'] . "</td><td>" . $value['first_name'] . "</td></tr>";
        }
        ?> 

        </table>
    </body>
</html>
