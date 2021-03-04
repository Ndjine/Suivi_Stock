<?php 
    include '../header.php';
    require_once '../models/contactDB.php';
    
    $contactAModifier = findContactById($_GET['idM']);

    if (isset($_POST['modiferContact'])) {
        extract($_POST);
        if (updateContact($id,$nom,$prenom,$tel)==1 || updateContact($id,$nom,$prenom,$tel)=='') {
           header("location:/repertoire_correction/pages/listeContact.php");
        } else{
            echo '<div class="col-md-6 h2 text-danger offset-4 mt-4">Erreur lors de la modification des données!</div>';
        }
    }
 ?>

<div class="container">
	<div class="card mt-4 container col-md-6">

    <h5 class="card-header peach-gradient white-text text-center py-4">
        <strong>EDITION DU CONTACT N°<?= $contactAModifier['idContact'] ?></strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" class="text-center" style="color: #757575;" >

           <input type="hidden" value="<?= $contactAModifier['idContact']?>" name="id">

            <div class="row">
            	<div class="col-md-6">
            		<label for="materialLoginFormEmail">Nom</label>
                <input type="text" value="<?= $contactAModifier['nomContact']?>" name="nom" required id="materialLoginFormEmail" class="form-control">
            	</div>
                
            	<div class="col-md-6">
            		<label for="materialLoginFormEmail">Prénom</label>
                <input type="text" value="<?= $contactAModifier['prenomContact']?>" name="prenom" required id="materialLoginFormEmail" class="form-control">
            	</div>
            </div>
            <div class="row mt-4">
            	<div class="col-md-6 offset-3">
            		<label for="materialLoginFormEmail">Téléphone</label>
                <input type="text" value="<?= $contactAModifier['telContact']?>" name="tel" required id="materialLoginFormEmail" class="form-control">
            	</div>
            </div>

            <button class="btn peach-gradient btn-rounded my-4 waves-effect z-depth-0" type="submit" name="modiferContact">Valider les modifications</button>

        </form>
        <!-- Form -->

    </div>

</div>