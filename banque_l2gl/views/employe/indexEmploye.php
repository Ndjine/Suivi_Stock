<?php
//Suppression
if(isset($_GET['idEmployeSup'])){
    require_once '../../models/employeBD.php';
    if(supprimerEmp($_GET['idEmployeSup']) == 1){
        header("location:/banque_l2gl/accueil.php?p=gEmploye");
    }
}
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 offset-10">
            <a href="/banque_l2gl/accueil.php?p=ajoutEmploye" class="btn btn-sm btn-info">Ajouter</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info text-center text-uppercase">
                    <h2>Liste des employés</h2>
                </div>
                <div class="card-body">
                    <table class="table-info table">
                        <tr>
                            <th class="font-weight-bold text-uppercase">Numéro</th>
                            <th class="font-weight-bold text-uppercase">Nom</th>
                            <th class="font-weight-bold text-uppercase">Prénom</th>
                            <th class="font-weight-bold text-uppercase">Login</th>
                            <th class="font-weight-bold text-uppercase">Adresse</th>
                            <th class="font-weight-bold text-uppercase">Tel</th>
                            <th class="font-weight-bold text-uppercase">Profil</th>
                            <th class="font-weight-bold text-uppercase" colspan="2">Actions</th>
                        </tr>
                        <?php
                        foreach ($employes as $e){
                            ?>
                            <tr>
                                <td><?= $e['numeroEmp'] ?></td>
                                <td><?= strtoupper($e['nomEmp']) ?></td>
                                <td><?= ucfirst($e['prenomEmp']) ?></td>
                                <td><?= $e['login'] ?></td>
                                <td><?= $e['adresseEmp'] ?></td>
                                <td><?= $e['telEmp'] ?></td>
                                <td><?= strtoupper($e['nomProfil']) ?></td>
                                <td colspan="2"><a href="/banque_l2gl/accueil.php?p=modifierEmploye&idE=<?= $e['idEmploye']?>" class="btn btn-sm btn-warning">Modifier</a>
                                    <a <?= ($e['idEmploye'] == $_SESSION['id']) ? 'hidden' : '' ?> href="views/employe/indexEmploye.php?idEmployeSup=<?= $e['idEmploye']?>" class="btn btn-sm btn-danger">Supprimer</a></td>
                            </tr>
                        <?php  }
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>