<?php
 require_once 'fonctions/bdd.php';

function getutilisateur($login,$mdp){
    global $db;
    $req = "SELECT * FROM utilisateur WHERE
    login='$login' AND mdp='$mdp'";
    return $db->query($req)->fetch();
}

function getjoueur()
{
    global $db ;

    $req ="SELECT * FROM joueur ORDER BY nbbut";
    
    return $db->query($req)->fetchAll() ;

}
function addjoueur($nummaillot , $nom , $prenom , $nationalite , $club , $nbbut, $age)
{
    global $db;
    $req ="INSERT INTO joueur VALUES (null,'$nummaillot' , '$nom' , '$prenom' ,'$nationalite' ,'$club' ,'$nbbut',' $age' )";
     return $db->exec($req);

}
?>
