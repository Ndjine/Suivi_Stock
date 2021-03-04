

<?php
require_once '../../../src/model/UserDB.php';
//include_once '../../../accueil.php';
require_once '../../../header.php';
require_once '../../../topBar.php';

$idGenere = genererIdUser();

?>
  
<div class="container mt-4 ">

    <div class="col-md-10 offset-1 dark">
        <div class="card">
            <div class="card-header  lighten-4 text-center text-uppercase h4 font-weight-bold cyan">
                Nouvel Utilisateur
            </div>
            <div class="card-body">
                <form action="" method="post">
                <div class="row mt-2 offset-4">
                        <div class="col-md-2 text-center">
                            <label for="numero" class="h5">IDUSER</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="idUsr" value="<?= $idGenere ?>" readonly   >
                        </div>

                    </div>

                    <div class="row mt-4">
                    <div class="col-md-2 text-center">
                            <label for="prenom" class="h5">PRENOM</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="prenomUsr">
                        </div>
                       
                        <div class="col-md-2 text-center">
                            <label for="nom" class="h5">NOM</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="nomUsr">
                        </div>
                       
                    </div>

                    <div class="row mt-4">
                    <div class="col-md-2 text-center">
                            <label for="login" class="h5">LOGIN</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="email">
                        </div>
                        
                        <div class="col-md-2 text-center">
                            <label for="login" class="h5">PASSWORD</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="password">
                        </div>

                     
                      

                    </div>

                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="btnAddUser" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
<?php

    if  (isset($_POST['btnAddUser'])){
        extract($_POST);
        if (ajouterUser($idUsr,$nomUsr,$prenomUsr,$email,$password) == 1){
            echo '<div class="col-md-10 offset-2 blue-text mt-2 h2">Utilisateur ajouté avec succès !</div>';
            
        }else{
            echo '<div class="col-md-10 offset-2 red-text mt-2 h2">Erreur lors de l\'ajout !</div>';

        }
    }

 ?> 
  <?php
  require_once '../../../footer.php';
  ?>