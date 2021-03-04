<?php
 require_once 'fonctions/bdd.php';

function getuser($login,$password){
    global $db;
    $req = "SELECT * FROM user WHERE
    login='$login' AND password='$password'";
    return $db->query($req)->fetch();
}

function getcontact()
{
    global $db ;

    $req ="SELECT * FROM contact ORDER BY idcontact";
    
    return $db->query($req)->fetchAll() ;

}
function addcontact( $nomContact , $prenomContact , $tel,
    $idUser )
{
    global $db;
    $req ="INSERT INTO contact VALUES ('$nomContact' , '$prenomContact' ,'$tel','$idUser')";
     return $db->exec($req);

}
function modifier($idcontact,$nom,$prenom,$tel){
    global $db;
    $req = "
        UPDATE contact
        SET nom='$nom',
            prenom='$prenom',
            tel='$tel'
       
    ";
    return $db->exec($req);
}

function supprimer($idcontact){
    global $db;

    return $db->exec("DELETE FROM contact WHERE idcontact");
}

?>
