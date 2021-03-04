

<?php
//session_start();
require_once '../../../src/model/ProduitDB.php';
require_once '../../../header.php';
include_once '../../../topBar.php';
$id = $_GET['idP'];
$produitAModifier = findProduitById($id);
?>
  
<div class="container mt-5">

    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header cyan lighten-4 text-center text-uppercase h4">
                edition du Produit N° <b><?= $produitAModifier['id'] ?></b>
            </div>
            <div class="card-body">
                <form action="" method="post">

                <div class="row mt-4">

<div class="col-md-2 text-center">
        <label for="id" class="h5">IdProduit</label>
    </div>
    <div class="col-md-4">
    <input type="text" class="form-control" name="id" value="<?= $produitAModifier['id'] ?>" readonly   >
    </div>
    <div class="col-md-2 text-center">
        <label for="ref" class="h5">Reference </label>
    </div>
    <div class="col-md-4">
    <input type="text" class="form-control" name="ref" value="<?= $produitAModifier['ref'] ?>"  readonly    >
    </div>  
   
</div>
                   
                    <div class="row mt-4">
                    <div class="col-md-2 text-center">
                            <label for="nom" class="h5">Nom Produit</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control"  name="nomProduit"value="<?= $produitAModifier['nomProduit'] ?>">
                        </div>
                   
                   
                        <div class="col-md-2 text-center">
                            <label for="login" class="h5" >Quantite Stock</label>
                        </div>
                        <div class="col-md-4">
                            <input type="number"  class="form-control" min = "0" name="qtStock"value="<?= $produitAModifier['qtStock'] ?>">
                        </div>

                     
                      

                    </div>

                   

                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="btnAddProduit" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
<?php
   if  (isset($_POST['btnAddProduit'])){
    extract($_POST);
    if (editerProduit($id,$nomProduit,$ref,$qtStock) == 1){
        echo '<div class="col-md-10 offset-2 blue-text mt-2 h2">Produit modifier avec succès !</div>';
       
    }else{
        echo '<div class="col-md-10 offset-2 red-text mt-2 h2">Erreur lors de l\'ajout !</div>';

    }
}