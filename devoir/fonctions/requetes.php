<?php
 require_once 'bdd.php';
 function gerecode(){
    global $db;
    $req = "SELECT MAX(idM) FROM medecin";
    $res = $db->query($req)->fetch();
    $idMax = $res[0] + 1;
    return 'MD_GL_'.$idMax;
}
 
function getspecialites()
{
    global $db ;

    $req ="SELECT * FROM specialite ORDER BY nomSp ";

     return $db->query($req)->fetchAll() ;

}
function getMedecins()
{
    global $db ;

    $req ="SELECT * FROM specialite,medecin WHERE idSpA= idSp ORDER BY nomSp ";
    
    return $db->query($req)->fetchAll() ;

}
function addmedcin($code , $nom , $prenom , $adresse , $tel ,$nbAnnee , $idSp)
{
    global $db;
    $req ="INSERT INTO medecin VALUES (null'$code','$nom','$prenom' ,'$adresse' ,'$tel' ,'$nbAnnee' ,' $idSp')";
     return $db->exec($req);

}


?>
