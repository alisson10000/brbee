<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of AppsChangelogs
 *
 * @author alisson
 */
class AppsChangelogs extends Conexao {
    //put your code here
    public function saveAppsChangelogs($idapp,$seq,$version,$changelog) {
        $consulta = "INSERT INTO apps_changelogs  VALUES (NULL, '$idapp','$seq','$version','$changelog')";

        $this->salvaOcorrencia($consulta);
    }

    public function updateAppsChangelogs($id , $idapp,$seq,$version,$changelog) {
        $consulta = "UPDATE `apps_changelogs` SET `idapp`='$idapp',`seq`='$seq',`version`='$version',`changelog`='$changelog' WHERE  id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function deleteAppsChangelogs($id) {
        $consulta = "DELETE FROM `apps_changelogs` WHERE id='$id'";
        $this->salvaOcorrencia($consulta);
    }

    public function queryAppsChangelogs() {
        $consulta = "SELECT * FROM `apps_changelogs`";
        $atributos = ["id", "idapp","seq","version","changelog"];
        return $this->listarEntidade($consulta, $atributos);
    }

}
