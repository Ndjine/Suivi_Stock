<?php
session_start();
include'../header.php';
 require_once '../models/contactDB.php';
 if (isset($_POST['ajoutContact'])) {
		extract($_POST);

		if (addContact( $nom , $prenom , $tel,
    $idUser ) == 1) {
			echo '<div class="col-md-6 h2 text-primary offset-4 mt-4">Contact enregistré avec succès !</div>';
		} else{
			echo '<div class="col-md-6 h2 text-danger offset-4 mt-4">Erreur lors de l\'enregistrement!</div>';
		}
	}

 

?>
<div class="col-md-6 h3 blue-text">
	Bonjour <?=ucfirst($_SESSION['prenom']).' '.strtoupper($_SESSION['nom'])?>
	
</div>
<div class="container">
	<div class="card mt-4 container col-md-6">

    <h5 class="card-header aqua-gradient white-text text-center py-4">
        <strong>NOUVEAU CONTACT</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" class="text-center" style="color: #757575;" >

           <input type="hidden" value="<?= $_SESSION['id']?>" name="idUser">

            <div class="row">
            	<div class="col-md-6">
            		<label for="materialLoginFormEmail">Nom</label>
                <input type="text" name="nom" required id="materialLoginFormEmail" class="form-control">
            	</div>
                
            	<div class="col-md-6">
            		<label for="materialLoginFormEmail">Prénom</label>
                <input type="text" name="prenom" required id="materialLoginFormEmail" class="form-control">
            	</div>
            </div>
            <div class="row mt-4">
            	<div class="col-md-6 offset-3">
            		<label for="materialLoginFormEmail">Téléphone</label>
                <input type="number" name="tel" required id="materialLoginFormEmail" class="form-control">
            	</div>
            </div>

            <button class="btn blue-gradient btn-rounded my-4 waves-effect z-depth-0" type="submit" name="ajoutContact">Ajouter</button>

        </form>
        <!-- Form -->

    </div>
