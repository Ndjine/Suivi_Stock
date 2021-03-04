<?php
session_start();
include_once 'header.php';
 require_once 'fonctions/bdd.php';
 require_once 'fonctions/requetes.php';

if(isset($_POST['btnConnecter'])){
    extract($_POST);
    $util = getutilisateur($login,$mdp);
   
    if($util != null){
        $_SESSION['idu'] = $util['idu'];
        $_SESSION['nom'] = $util['nom'];
        $_SESSION['prenom'] = $util['prenom'];
       
        header("location:/examen/accueil.php");
    } else{
        header("location:/examen/index.php?erreur");
    }
}


?>



<!-- Material form login -->
<div class="card mt-5 container col-md-5">

    <h5 class="card-header red white-text text-center py-5">
        <strong>AUTHENTIFICATION</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-7 pt-0">

        <!-- Form -->
        <form method="post" class="text-center" style="color: red;" action="#!">
<br>

            <!-- Email -->
            <div class="form">
                 <label for="materialLoginFormEmail"> <h4>Nom d'Utilisateur</h4></label>
                 <br>
                <input style="color: red" type="text" name="login" required id="materialLoginFormEmail" class="form-control">
               
            </div>
<br>
            <!-- Password -->
            <div class="form">
                <label for="materialLoginFormPassword"><h4>Mot de Passe</h4></label>
                <br>
                <input style="text-transform: uppercase; color: red" type="password" name="mdp"  required id="materialLoginFormPassword" class="form-control">
                
            </div>


            <!-- Sign in button -->
            <button class="btn red btn-rounded my-5 waves-effect z-depth-0" type="submit" name="btnConnecter"><h3 style="color: white">Se Connecter</h3></button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form login -->
<?php
    if (isset($_GET['erreur'])){
        echo '<div class="h2 text-center red-text container col-md-6">Login ou Mot de Passe incorrect !!!</div>';
    }
?>

