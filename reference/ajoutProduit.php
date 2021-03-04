<?php 
  include_once 'header.php';
  require_once 'fonctions/requets.php';

  $produits = getProduit();
  $listCategories = getCategories();

  if (isset($_POST['ajout'])) {
  	extract($_POST);
  	if (addProduit($libelle, $prix, $quantite, $categorie) == 1 ) {
  		header("location:/gespro");
  	}
  }
 ?>


<div class="card mt-4 container col-md-8">

  <h5 class="card-header aqua-gradient white-text text-center py-4">
    <strong>NOUVEAU PRODUI</strong>
  </h5>

  <div class="card-body">
  	<form method="post">
  		<div class="row mt-4">
  			<div class="col-md-3">
  				<label for="">LIBELLE</label>
  			</div>
  			<div class="col-md-5">
  				<input type="text" name="libelle" class="form-control">
  			</div>
  			

  		</div>
  		<div class="row mt-4">
  			<div class="col-md-3">
  				<label for="">PRIX</label>
  			</div>
  			<div class="col-md-5">
  				<input type="number" name="prix" class="form-control">
  			</div>
  			

  		</div>
  		<div class="row mt-4">
  			<div class="col-md-3">
  				<label for="">QUANTITE</label>
  			</div>
  			<div class="col-md-5">
  				<input type="number" name="quantite" class="form-control">
  			</div>
  			

  		</div>
  		<div class="row mt-4">
  			<div class="col-md-3">
  				<label for="">CATEGORIE</label>
  			</div>
  			<div class="col-md-5">
  				<select class="form-control" id="" name="categorie">
  					<option value="" disabled selected>Sélectionner Une Catégorie</option>
  					<?php 
  						foreach ($listCategories as $categorie) {
  						?>	
  						<option value="<?= $categorie['idCategorie']?>"><?= $categorie['nomCategorie']?></option>
  						<?php }
  					 ?>
  				</select>
  			</div>
  			

  		</div>
  		<div class="row mt-4">
  			<div class="col-md-3 offset-5" >
  				<input type="submit"  name="ajout" value="Enregistre" class="btn btn-sm btn-primary">
  			</div>
  			

  		</div>
  		
  	</form>
  </div>

  </div>