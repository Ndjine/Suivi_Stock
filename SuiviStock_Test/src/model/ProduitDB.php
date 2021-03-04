<?php
require_once 'DB.php';
require_once 'UserDB.php';

function genererIdproduit(){
    global $db;
    $req = "SELECT MAX(id) FROM produit";
    $res = $db->query($req)->fetch();
    $idMax = $res[0] + 1;
    return $idMax;
}
function genererrefproduit(){
    
    global $db;
    $req = "SELECT Max(idUsr) FROM user";
    $res = $db->query($req)->fetch();
    $idMax = $res[0] ;
    return 'PROD_'.date('dmY').'_'.$idMax;
}

function findProduitById($id){
    global $db;
    $req = "SELECT * FROM produit WHERE id= $id ";
    return $db->query($req)->fetch();
}

function ajouterProduit($id,$nomProduit,$ref,$qtStock){
    $req = "INSERT INTO produit 
            VALUES ('$id','$nomProduit','$ref','$qtStock')";
    global $db;
    return $db->exec($req);
}
function getProduit(){
    global $db ;

    $req ="SELECT * FROM produit ORDER BY id";
    
    return $db->query($req)->fetchAll() ;
}
function supprimerprod($id) {
    global $db;

    return $db->exec("DELETE FROM produit WHERE id = $id");
}
function editerProduit($id,$nomProduit,$ref,$qtStock){
    global $db;
    $req = "
        UPDATE produit
        SET nomProduit='$nomProduit',
        qtStock='$qtStock'
       
        WHERE id=$id
      
       
    ";
    return $db->exec($req);
}

    function CirProduit(){
        // $req = "SELECT * FROM produit ORDER BY id";
        // global $db;
        $sql = 'SELECT nomProduit, qtStock FROM produit ORDER BY id';
        $result = mysql_query($sql) ;
        while ( $row = mysql_fetch_array($result))
        {
    ?>
     <option value=' <?php echo $row[0] ;?>' ><?php echo $row[1] ;?>
    <?php
       // return $db->query($req)->fetchAll();
    }
    }
    // function supprimer($id) {
    //     global $DB;

    //     return $DB->exec("DELETE FROM produit WHERE id = $id");
    // }

    // function ajouter($nomUsr){
    //     global $DB;
    //     $req = "INSERT INTO produit(nomproduit) VALUES ('$nom')";
    //     return $DB->exec($req);
    // }

    // function modifier($nom,$id){
    //     global $DB;
    //     $req = "UPDATE produit SET nomproduit = '$nom' WHERE id = $id";
    //     return $DB->exec($req);
    // }

    // function findUserById($id){
    //     global $DB;
    //     $req = "SELECT * FROM produit WHERE id = $id";
    //     return $DB->query($req)->fetch();
    // }
    // function getProduits()
    // {
    //     global $DB ;
    
    //     $req ="SELECT * FROM produit WHERE id ORDER BY id desc";
        
    //     return $DB->query($req)->fetchAll() ;
    
    // }
    // function addProduit($nomProduit , $ref , $qtStock )
    // {
    //     global $DB;
    //     $req ="INSERT INTO produit VALUE(null ,'$nomProduit','$ref' ,'$qtStock' )";
    //     return $DB->exec($req);
    
    // }


//?>