<?php
//Suppression
session_start();

require_once '../../../header.php';
require_once '../../../src/model/UserDB.php';
 if(isset($_GET['idUserSup'])){
  
	
	
     if(supprimerUser($_GET['idUserSup']) == 1){
         header("/SuiviStock/src/view/User/liste.php");
     }
}
$users = getUser();
//$idUserSup= supprimerUser($id);
include_once '../../../topBar.php'
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-2 offset-10">
            <a href="/SuiviStock/src/view/User/insertion.php" class="btn btn-sm btn-info">Ajouter</a>
        </div>
      
       
    </div>

    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info text-center text-uppercase">
                    <h2>Liste des Utilisateurs</h2>
                </div>
                <div class="card-body">
                    <table class="table-info table">
                        <tr>
                            <th class="font-weight-bold text-uppercase">IdUser</th>
                            <th class="font-weight-bold text-uppercase">Nom</th>
                            <th class="font-weight-bold text-uppercase">Prénom</th>
                            <th class="font-weight-bold text-uppercase">Email</th>
                            
                            <th class="font-weight-bold text-uppercase" colspan="2">Actions</th>
                        </tr>
                        <?php
						
                        foreach ($users as $u){
                            ?>
                            <tr>
                                <td><?= $u['idUsr'] ?></td>
                                <td><?= strtoupper($u['nomUsr']) ?></td>
                                <td><?= ucfirst($u['prenomUsr']) ?></td>
                                <td><?= $u['email'] ?></td>
                                <td colspan="2"><a href="/SuiviStock/src/view/User/modifier.php?p=modifierUser&idU=<?= $u['idUsr']?>" class="btn btn-sm btn-warning">Modifier</a>
                                    <a <?= ($u['idUsr'] == $_SESSION['id']) ? 'hidden' : '' ?> href="/SuiviStock/src/view/User/liste.php?idUserSup=<?= $u['idUsr']?>" class="btn btn-sm btn-danger">Supprimer</a></td>
                            </tr>
                        <?php  }
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>