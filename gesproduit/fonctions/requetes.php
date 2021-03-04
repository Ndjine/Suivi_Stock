<?php
 require_once 'bdd.php';

function getCategories()
{
    global $db ;

    $req ="SELECT * FROM categorie ORDER BY nomCategorie";

     return $db->query($req)->fetchAll() ;

}
function getProduits()
{
    global $db ;

    $req ="SELECT * FROM categorie, produit WHERE idCategorieF = idCategorie ORDER BY idProduit desc";
    
    return $db->query($req)->fetchAll() ;

}
function addProduit($libelle , $prix , $qte , $idCategorie)
{
    global $db;
    $req ="INSERT INTO produit VALUE(null ,'$libelle','$prix' ,'$qte' ,'$idCategorie')";
    return $db->exec($req);

}


?>
