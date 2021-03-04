<?php
 require_once 'bdd.php';
function addcontact( $nom , $prenom , $tel,
    $idUser )
{
    global $db;
    $req =" INSERT INTO contact($nomContact , $prenomContact , $telContact, $idUserF ) VALUES (null,'$nom' , '$prenom' ,'$tel','$idUser')";
     return $db->exec($req);

}

?>