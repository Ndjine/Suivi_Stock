

<?php
//session_start();
require_once '../../../src/model/UserDB.php';
require_once '../../../header.php';
include_once '../../../topBar.php';
$id = $_GET['idU'];
$userAModifier = findUserById($id);
?>
  
<div class="container mt-5">

    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header cyan lighten-4 text-center text-uppercase h4">
                edition de l'Utilisateur N° <b><?= $userAModifier['idUsr'] ?></b>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mt-2 offset-4">

                        <div class="col-md-6">
                            <input type="hidden" class="form-control" name="id" value="<?= $userAModifier['idUsr'] ?>"   >
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="nom" class="h5">NOM</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" value="<?= $userAModifier['nomUsr'] ?>" class="form-control" name="nomUsr">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="prenom" class="h5">PRENOM</label>
                        </div>
                        <div class="col-md-4">
                            <input value="<?= $userAModifier['prenomUsr'] ?>" type="text" class="form-control" name="prenomUsr">
                        </div>

                    </div>

                    <div class="row mt-4">
                     <div class="col-md-2 text-center">
                            <label for="login" class="h5">LOGIN</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" value="<?= $userAModifier['email'] ?>" class="form-control" name="email">
                        </div>
                        
                        <div class="col-md-2 text-center">
                            <label for="login" class="h5">PASSWORD</label>
                        </div>
                            <div class="col-md-4">
                            <input type="text" value="<?= $userAModifier['password'] ?>" class="form-control" name="password">
                          </div>

                   
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
    if (editerUser($id,$nomUsr,$prenomUsr,$email,$password) == 1){
        echo '<div class="col-md-10 offset-2 blue-text mt-2 h2">Utilisateur ajouté avec succès !</div>';
       
    }else{
        echo '<div class="col-md-10 offset-2 red-text mt-2 h2">Erreur lors de l\'ajout !</div>';

    }
}