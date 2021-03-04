<?php
//Suppression
session_start();

require_once '../../../header.php';
require_once '../../../src/model/ProduitDB.php';
 if(isset($_GET['idprodSup'])){
  
	
	
     if(supprimerprod($_GET['idprodSup']) == 1){
         header("/SuiviStock/src/view/produit/listproduit.php");
     }
}
$produit = getProduit();
//$idUserSup= supprimerUser($id);
include_once '../../../topBar.php'
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-2 offset-10">
            <a href="/SuiviStock/src/view/produit/addproduit.php" class="btn btn-sm btn-info">Ajouter</a>
        </div>
      
       
    </div>

    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info text-center text-uppercase">
                    <h2>Liste des Produit</h2>
                </div>
                <div class="card-body">
                    <table class="table-info table">
                        <tr>
                            <th class="font-weight-bold text-uppercase">Id</th>
                            <th class="font-weight-bold text-uppercase">nomProduit</th>
                            <th class="font-weight-bold text-uppercase">Reference</th>
                            <th class="font-weight-bold text-uppercase">Quantite</th>
                            
                            <th class="font-weight-bold text-uppercase" colspan="2">Actions</th>
                        </tr>
                        <?php
						
                        foreach ($produit as $p){
                            ?>
                            <tr>
                                <td><?= $p['id'] ?></td>
                                <td><?= strtoupper($p['nomProduit']) ?></td>
                                <td><?= ucfirst($p['ref']) ?></td>
                                <td><?= $p['qtStock'] ?></td>
                                <td colspan="2"><a href="/SuiviStock/src/view/produit/modproduit.php?p=modifierprod&idP=<?= $p['id']?>" class="btn btn-sm btn-warning">Modifier</a>
                                    <a <?= $p['id']  ?> href="/SuiviStock/src/view/produit/listproduit.php?idprodSup=<?= $p['id']?>" class="btn btn-sm btn-danger">Supprimer</a></td>
                            </tr>
                        <?php  }
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>