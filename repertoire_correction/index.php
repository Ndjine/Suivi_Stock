<?php 
    session_start();

    require_once 'models/utilisateurDB.php';

    if (isset($_POST['btnConnecter'])) { // Si on clique sur le bouton
        // extraire les données du tableau $_POST afin
        // que tous les names du formulaire soient des variables
        extract($_POST);
        //Appel de la fonction findUserByLoginAndPass($login, $mdp)
        // Cette fonction est définie dans utilisateurDB.php
        // donc obligatoirement on doit l'inclure Sinon rk erreur

        // On recupère le résultat dans une variable
        $utilisateur = findUserByLoginAndPass($login, $mdp);

        if ($utilisateur == null) {
            echo '<div class="col-md-6 h2 text-danger offset-4 mt-4">Login ou mot de passe incorrect</div>';
        } else {
            $_SESSION['id'] = $utilisateur['idUser'];
            $_SESSION['nom'] = $utilisateur['nomUser'];
            $_SESSION['prenom'] = $utilisateur['prenomUser'];

            header('location:/repertoire_correction/pages/listeContact.php');
        }
       
    }

    include 'header.php';
 ?>

<!-- Material form login -->
<div class="card mt-4 container col-md-4">

    <h5 class="card-header aqua-gradient white-text text-center py-4">
        <strong>AUTHENTIFICATION</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" class="text-center" style="color: #757575;" >

            <!-- Email -->
            <div>
                <label for="materialLoginFormEmail">Nom d'Utilisateur</label>
                <input type="text" name="login" required id="materialLoginFormEmail" class="form-control">
            </div>

            <!-- Password -->
            <div>
                <label for="materialLoginFormPassword">Mot de Passe</label>
                <input type="password" name="mdp"  required id="materialLoginFormPassword" class="form-control">
            </div>


            <!-- Sign in button -->
            <button class="btn blue-gradient btn-rounded my-4 waves-effect z-depth-0" type="submit" name="btnConnecter">Se Connecter</button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form login -->