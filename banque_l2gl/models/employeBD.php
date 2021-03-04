<?php
require_once 'bdd.php';

function genererNumeroEmploye(){
    global $db;
    $req = "SELECT MAX(idEmploye) FROM employe";
    $res = $db->query($req)->fetch();
    $idMax = $res[0] + 1;
    return 'BGL_EMP_'.date('dmY').'_'.$idMax;
}


function findEmpByLogin($login,$mdp){
    global $db;
    $req = "SELECT * FROM employe, profil WHERE idProfilF = idProfil 
    AND login='$login' AND mdp='$mdp'";
    return $db->query($req)->fetch();
}

function ajouterEmp($numero,$nom,$prenom,$tel,$adresse,$login,$mdp,$profil){
    $req = "INSERT INTO employe (numeroEmp, nomEmp, prenomEmp, telEmp, adresseEmp, login, mdp, idProfilF)
            VALUES ('$numero','$nom','$prenom','$tel','$adresse','$login','$mdp',$profil)";
    global $db;
    return $db->exec($req);
}

function editerEmp($id,$nom,$prenom,$tel,$adresse,$login){
    global $db;
    $req = "
        UPDATE employe
        SET nomEmp='$nom',
        prenomEmp='$prenom',
        telEmp='$tel',
        adresseEmp='$adresse',
        login='$login'
        WHERE idEmploye=$id
    ";
    return $db->exec($req);
}

function supprimerEmp($id){
    global $db;

    return $db->exec("DELETE FROM employe WHERE idEmploye = $id");
}

function getEmployes(){
    global $db;

    return $db->query("SELECT * FROM employe, profil WHERE idProfilF = idProfil")->fetchAll();
}

function findEmployeById($id){
    global $db;
    $req = "SELECT * FROM employe, profil WHERE idProfilF = idProfil 
    AND idEmploye = $id";
    return $db->query($req)->fetch();
}