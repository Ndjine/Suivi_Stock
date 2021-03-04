<?php 
	include_once 'header.php';
  require_once 'fonctions/requetes.php';

   $listCategories =getCategories();
 
   if(isset($_POST['ajout'] ))
   {
     extract($_POST);
     if ( addProduit ($libelle,$prix,$qte,$categorie)==1)
      {
       header("location:/gesproduit");
     }
   }

 ?>
 <div class="card mt-4 container col-md-8">

<h5 class="card-header aqua-gradient white-text text-center py-4">
  <strong>NOUVEAU PRODUIT</strong>
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
        <input type="number" name="qte" class="form-control">
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">CATEGORIE</label>
      </div>
      <div class="col-md-5 ">
    <select name="categorie" id="" class="form-control">
      <option value=""disabled selected >Selectionner une categorie</option>
      <?php
      foreach ($listCategories as $categorie)
      {
        ?>
<option value="<?= $categorie['idCategorie'] ?>">
<?=strtoupper ( $categorie['nomCategorie']) ?>
</option>



     <?php }
?>
    </select>   
    </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-3 offset-4">
  <input type="submit" name="ajout" value="Enregistrement" class="btn btn-primary btn-sm">
      </div>
    </div>
  </form>
</div>
 </div>