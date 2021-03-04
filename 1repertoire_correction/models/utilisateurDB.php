<?php
 require_once 'bdd.php';

function getuser($login,$mdp){
    global $db;
    $req = "SELECT * FROM utilisateur WHERE
    login='$login' AND mdp='$mdp'";
    return $db->query($req)->fetch();
}

/*function getcontact()
{
    global $db ;

    $req ="SELECT * FROM contact ORDER BY idcontact";
    
    return $db->query($req)->fetchAll() ;

}
function addcontact( $nom , $prenom , $tel )
{
    global $db;
    $req ="INSERT INTO contact VALUES (null, '$nom' , '$prenom' ,'$tel')";
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
*/
?>
