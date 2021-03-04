<?php

//Modification d'un profil

if (isset($_POST['btnUpProfil'])){
    extract($_POST);
    if(modifier($nom,$id) == 1){
        header("location:/banque_l2gl/accueil.php?p=gProfil");
    }
}
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header blue lighten-4 text-center text-uppercase">
                    <h2>Edition du Profil </h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $profil['idprofil'] ?>">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">NOM : </label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="nom" value="<?= $profil['nomProfil'] ?>" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="submit" value="Valider" name="btnUpProfil" class="btn btn-primary btn-sm">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>