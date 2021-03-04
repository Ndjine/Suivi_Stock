<?php

if(isset($_GET['idProfilSup'])){
    require_once '../../models/profilBD.php';

    $id = $_GET['idProfilSup'];
    if (supprimer($id) == 1){
        header("location:/banque_l2gl/accueil.php?p=gProfil");
    }
}
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 offset-6">
            <a href="/banque_l2gl/accueil.php?p=ajoutProfil" class="btn btn-sm btn-info">Ajouter</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-center text-uppercase">
                    <h2>Liste des profils</h2>
                </div>
                <div class="card-body">
                    <table class="table-info table">
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th colspan="2">Actions</th>
                        </tr>
                        <?php
                        foreach ($profils as $p){
                            ?>
                            <tr>
                                <td><?= $p['idprofil'] ?></td>
                                <td><?= $p['nomProfil'] ?></td>
                                <td colspan="2"><a href="/banque_l2gl/accueil.php?p=modifierProfil&idP=<?= $p['idprofil']?>" class="btn btn-sm btn-warning">Modifier</a>
                                    <a href="views/profil/indexProfil.php?idProfilSup=<?= $p['idprofil']?>" class="btn btn-sm btn-danger">Supprimer</a></td>
                            </tr>
                        <?php  }
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>