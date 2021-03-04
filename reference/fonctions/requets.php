<?php 
require_once 'fonctions/bdd.php';


function getSpecialite(){
     global $base;
      $req = "SELECT * FROM specialite ORDER BY nomSp";
      

        return $base->query($req)->fetchAll();
}

function getMedecin(){
   global $base;
    $req = "SELECT * FROM specialite, medecin WHERE idSpF = idSp ORDER BY nom desc";
      

        return $base->query($req)->fetchAll();
}
function addMedecin($idM, $code, $nom, $prenom, $adresse, $tel, $nbAnneeExperience, $idSp){
        global $base;
        $req = "INSERT INTO medecin VALUES (null,$idM, '$code', '$nom', '$prenom', '$adresse', $tel, $nbAnneeExperience, $idSp)";
        return $base->exec($req);
    }

    function genererCode(){
    global $db;
    $req = "SELECT MAX(idM) FROM medecin";
    $res = $db->query($req)->fetch();
    $idMax = $res[0] + 1;
    return 'MD_GL_'.$idMax;
}


 ?>