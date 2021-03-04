
<?php 
	include_once 'header.php';
  require_once 'fonctions/requetes.php';

  $produits =getProduits();
 
 ?>
 <div class="row mt-4">
<div class="col-md-4 offset-8">
  <a href="/gesproduit/ajoutProduit.php" class="btn btn-sm btn-primary" >Nouveau</a>
</div>
</div>
 
<div class="card mt-4 container col-md-10">

  <h5 class="card-header aqua-gradient white-text text-center py-4">
    <strong>Listes des produits</strong>
  </h5>

  
       <div class="card-body px-lg-5 pt-0">
         <table class="table table-info" >
           <tr>
             <th class="h4"># </th>
             <th class="h4">LIBELLE</th>
             <th class="h4">PRIX </th>
             <th class="h4">QUANTITE</th>
             <th class="h4">CATEGORIE</th>
           </tr>
           <?php 
	foreach($produits as $p){
    ?>
    <tr>
      <td><?= $p['idProduit']?></td>
      <td><?= $p['libelle']?></td>
      <td><?= $p['prix']?></td>
      <td><?= $p['qte']?></td>
      <td><?= strtoupper( $p['nomCategorie'])?></td>
    </tr>
    <?php }
  
  ?>
         </table>
         
   </div>  
     
   </div>

