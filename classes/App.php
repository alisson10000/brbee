<?php

class App extends Conexao {

    //put your code here

    public function saveApp( $appname, $version, $url, $licensing_url, $dependencies, $md5, $active) {
        $consulta = "INSERT INTO apps  VALUES (NULL, '$appname','$version', '$url', '$licensing_url', '$dependencies','$md5','$active')";

        $this->salvaOcorrencia($consulta);
    }

    public function updateCompany($app_id,$appname, $version, $url, $licensing_url, $dependencies, $md5, $active) {
        $consulta = "UPDATE `apps` SET `appname`='$appname',`version`='$version',`url`='$url',`licensing_url`='$licensing_url',`dependencies`='$dependencies',`md5`='$md5',`active`='$active' WHERE app_id='$app_id'";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteCompany($app_id) {
        $consulta = "DELETE FROM `apps` WHERE app_id='$app_id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryApp() {
        $consulta = "SELECT * FROM `apps` where app_id > 0";
        $atributos = ["app_id", "appname"];
        return $this->listarEntidade($consulta, $atributos);
    }

}
