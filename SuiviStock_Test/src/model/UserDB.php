<?php
require_once 'DB.php';

function genererIdUser(){
    global $db;
    $req = "SELECT MAX(idUsr) FROM user";
    $res = $db->query($req)->fetch();
    $idMax = $res[0] + 1;
    return $idMax;
}

function findUserByLogin($email,$password){
    
    global $db;
    $req = "SELECT * FROM user WHERE   
     email ='$email' AND password='$password' ";
     return $db->query($req)->fetch();
}
function getUser(){
    global $db ;

    $req ="SELECT * FROM user ORDER BY idUsr";
    
    return $db->query($req)->fetchAll() ;
}
function findUserById($id){
    global $db;
    $req = "SELECT * FROM user WHERE idUsr= $id ";
    return $db->query($req)->fetch();
}



function ajouterUser($idUsr,$nomUsr,$prenomUsr,$email,$password){
    $req = "INSERT INTO user 
            VALUES ('$idUsr','$nomUsr','$prenomUsr','$email','$password')";
    global $db;
    return $db->exec($req);
}

  
    function supprimerUser($id) {
        global $db;

        return $db->exec("DELETE FROM user WHERE idUsr = $id");
    }
    function editerUser($id,$nomUsr,$prenomUsr,$email,$password){
        global $db;
        $req = "
            UPDATE user
            SET nomUsr='$nomUsr',
            prenomUsr='$prenomUsr',
            email='$email',
            password='$password'
            WHERE idUsr=$id
          
           
        ";
        return $db->exec($req);
    }
    


   


?>