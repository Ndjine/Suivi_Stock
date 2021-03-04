
<?php 
	include_once 'header.php';
 require_once 'fonctions/bdd.php';
 require_once 'fonctions/requetes.php';
 $listspecialites = getspecialites();
 $codeGenere = gerecode(); 
 $medecins= getMedecins();
 
 ?>
 <div class="card mt-4 container col-md-10">

<h5 class="card-header aqua-gradient white-text text-center py-4">
  <strong>NOUVEAU </strong>
</h5>
<div class="card-body">
  <form method="post">
    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">CODE</label>
      </div>
      <div class="col-md-5">
        <input type="text" value="<?= $codeGenere ?>"   name="code" class="form-control " readonly>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">NOM</label>
      </div>
      <div class="col-md-5">
        <input type="text" name="nom" class="form-control">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">PRENOM</label>
      </div>
      <div class="col-md-5">
        <input type="text" name="prenom" class="form-control">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">ADRESSE</label>
      </div>
      <div class="col-md-5">
        <input type="text" name="adresse" class="form-control">
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">TEL</label>
      </div>
      <div class="col-md-5">
        <input type="number" name="tel" class="form-control">
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">NOMBRE D'ANNEE</label>
      </div>
      <div class="col-md-5">
        <input type="number" name="nbAnnee" class="form-control" min="0">
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">SPECIALITE</label>
      </div>
      <div class="col-md-5 ">
    <select name="categorie" id="" class="form-control">
      <option value=""disabled selected >Selectionner une specialite</option>
      <?php
      foreach ($listspecialites as $specialite)
      {
        ?>
<option value="<?= $specialite['idSp'] ?>">
<?=strtoupper ( $specialite['nomSp']) ?>
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
 
<?php

if(isset($_POST['ajout'] ))
{
  extract($_POST);
  if ( addmedcin ($idM,$code , $nom , $prenom ,$adresse ,$tel ,$nbAnnee , $idSp)==1)
   {
    header("location:/devoir");
  
  }
}

 ?>
<div class="card mt-4 container col-md-12">

  <h5 class="card-header aqua-gradient white-text text-center py-4">
    <strong> LISTE DES MEDECIN</strong>
  </h5>

  
       <div class="card-body px-lg-5 pt-0">
         <table class="table table-info" >
           <tr>
             <th class="h3">CODE </th>
             <th class="h3">NOM</th>
             <th class="h3">PRENOM </th>
             <th class="h3">TEL</th>
             <th class="h3">SPECIALITE</th>
             <th class="h3">ACTION</th>
           </tr>
           <?php 
	foreach($medecins as $m){
    ?>
    <tr style="text-align: center;">
      <td><?= $m['code']?></td>
      <td><?= strtoupper($m['nom'])?></td>
      <td><?= ucfirst ( $m['prenom'])?></td>
      <td><?= $m['adresse']?></td>
      <td><?= $m['tel']?></td>
      <td><?= $m['nbAnnee']?></td>
      <td><?= $m['nomSp']?></td>
      <td>  <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="btnsup" value="Supprimer" class="btn btn-md btn-info">
                        </div>
                    </div></td>
    </tr>
    <?php } 
  
  ?>
        
         </table>

   </div>  
     
   </div>
