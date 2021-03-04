
<?php 
  include_once 'header.php';
    require_once 'fonctions/requets.php';

  $medecin = getMedecin();
  $listSpecialite = getSpecialite();

  if (isset($_POST['ajout'])) {
    extract($_POST);
    if (addMedecin($idM, $code, $nom, $prenom, $adresse, $tel, $nbAnneeExperience, $idSp) == 1 ) {
      $medecin = getMedecin();
    }
  }
 ?>



<div class="card mt-4 container col-md-8">

  <h5 class="card-header aqua-gradient white-text text-center py-4">
    <strong>AJOUT MEDECIN</strong>
  </h5>

  <div class="card-body">
    <form method="post">
      <div class="row mt-2">
        <div class="col-md-3">
          <label for="">CODE</label>
        </div>
        <div class="col-md-5">
          <input type="text" name="code" class="form-control"   >
        </div>
        

      </div>
      <div class="row mt-2">
        <div class="col-md-3">
          <label for="">NOM</label>
        </div>
        <div class="col-md-5">
          <input type="text" name="nom" class="form-control">
        </div>
        

      </div>
      <div class="row mt-2">
        <div class="col-md-3">
          <label for="">PRENOM</label>
        </div>
        <div class="col-md-5">
          <input type="text" name="prenom" class="form-control">
        </div>
        <div class="row mt-2">
        <div class="col-md-3">
          <label for="">ADRESSE</label>
        </div>
        <div class="col-md-5">
          <input type="text" name="adresse" class="form-control">
        </div>
        <div class="row mt-2">
        <div class="col-md-3">
          <label for="">TEL</label>
        </div>
        <div class="col-md-5">
          <input type="number" name="tel" class="form-control">
        </div>
        <div class="row mt-2">
        <div class="col-md-3">
          <label for="">NOMBRE ANS</label>
        </div>
        <div class="col-md-5">
          <input type="number" name="nbAnnee" class="form-control"><br>
        </div>

        

      </div>
      <div class="row mt-4">
        <div class="col-md-3">
          
          <label for="">SPECIALITE</label>
        </div>
        <div class="col-md-5">
          <select class="form-control" id="" name="specialite">
            <option value="" disabled selected>Sélectionner Une Specialite</option>
            <?php 
              foreach (listSpecialite as $specialite) {
              ?>  
              <option value="<?= $specialite['idSp']?>"><?= $specialite['nomSp']?></option>
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



 <!-- Material form login -->
<div class="card mt-4 container col-md-10">

  <h5 class="card-header aqua-gradient white-text text-center py-4">
    <strong>LISTE DES MEDECIN</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">
<table class="table table-info">
  <tr>
    <th class="h4">CODE</th>
    <th class="h4">NOM</th>
    <th class="h4">PRENOM</th>
    <th class="h4">TEL</th>
    <th class="h4">SPECIALITE</th>
  </tr>
  <?php 
    foreach ($medecin as $p) {
       ?> 
       <tr>
         <td><?= $p['code'] ?></td>
         <td><?= $p['nom']?></td>
         <td><?= $p['prenom']?></td>
         <td><?= $p['tel']?></td>
         <td><?= $p['nomSp']?></td>
       </tr>
    <?php }
   ?>
</table>


  </div>

</div>
<!-- Material form login -->

