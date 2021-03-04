<?php
    require_once 'bdd.php';

    function getProfils(){
        $req = "SELECT * FROM profil ORDER BY idprofil";
        global $db;

        return $db->query($req)->fetchAll();
    }

    function supprimer($id) {
        global $db;

        return $db->exec("DELETE FROM profil WHERE idprofil = $id");
    }

    function ajouter($nom){
        global $db;
        $req = "INSERT INTO profil(nomProfil) VALUES ('$nom')";
        return $db->exec($req);
    }

    function modifier($nom,$id){
        global $db;
        $req = "UPDATE profil SET nomProfil = '$nom' WHERE idprofil = $id";
        return $db->exec($req);
    }

    function findProfilById($id){
        global $db;
        $req = "SELECT * FROM profil WHERE idprofil = $id";
        return $db->query($req)->fetch();
    }