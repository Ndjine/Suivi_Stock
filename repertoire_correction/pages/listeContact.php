<?php
	session_start();
	if (empty($_SESSION)) {
		header('location:/repertoire_correction');
	}

	include '../header.php';

	require_once '../models/contactDB.php';

	if (isset($_POST['ajoutContact'])) {
		extract($_POST);

		if (addContact($nom,$prenom,$tel,$idUser) == 1) {
			echo '<div class="col-md-6 h2 text-primary offset-4 mt-4">Contact enregistré avec succès !</div>';
		} else{
			echo '<div class="col-md-6 h2 text-danger offset-4 mt-4">Erreur lors de l\'enregistrement!</div>';
		}
	}

	if (isset($_GET['deconnexion'])) {
		session_unset();
		header('location:/repertoire_correction');
	}

	if (isset($_GET['idSup'])) {
		
		$idS = $_GET['idSup'];

		if (delContact($idS) != 1) {
			echo '<div class="col-md-6 h2 text-danger offset-4 mt-4">Erreur lors de la suppression !</div>';
		} else{
			header('location:/repertoire_correction/pages/listeContact.php');
		}
	}

?>

<div class="col-md-6 h3 red-text offset-4 mt-4">
	Bonjour <?= ucfirst($_SESSION['prenom']).' '.strtoupper($_SESSION['nom']) ?>
	<a href="?deconnexion" class="btn btn-danger">SE DECONNECTER</a>
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
                <input type="text" name="tel" required id="materialLoginFormEmail" class="form-control">
            	</div>
            </div>

            <button class="btn blue-gradient btn-rounded my-4 waves-effect z-depth-0" type="submit" name="ajoutContact">Ajouter</button>

        </form>
        <!-- Form -->

    </div>

</div>

<?php 
	$contacts = getContactsByIdUser($_SESSION['id']);

	if (count($contacts) == 0) {
		echo '<div class="col-md-10 h3 text-primary offset-2 mt-4">Aucun contact n\'a été enregistré pour cet utilisateur ! </div>';
	} else {
		?>

		<div class="card mt-4">
		<div class="card-header text-uppercase text-center h3 blue-grey-text font-weight-bold">
			Liste de mes contacts
		</div>	
		<div class="card-body">
			<table class="table table-bordered">
				<tr>
					<th>NOM</th>
					<th>PRENOM</th>
					<th>TELEPHONE</th>
					<th colspan="2">ACTIONS</th>
				</tr>
				<?php 
					foreach ($contacts as $c) {
						?>
						<tr>
							<td><?= $c['nomContact'] ?></td>
							<td><?= $c['prenomContact'] ?></td>
							<td><?= $c['telContact'] ?></td>
							<td colspan="2">
								<a href="modifierContact.php?idM=<?= $c['idContact'] ?>" class="btn orange btn-sm ">Modifier</a>
								<a href="?idSup=<?= $c['idContact'] ?>" class="btn red btn-sm">Supprimer</a>
							</td>
						</tr>
				<?php	}
				 ?>
			</table>
		</div>
	</div>

<?php	}
 ?>

 
 </div>
