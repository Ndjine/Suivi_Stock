<?php
session_start();
require_once 'fonctions/requetes.php';


if (empty($_SESSION)){
    header("location:/repertoire");
}

if (isset($_GET['btnDecon'])){
    session_unset();
    header("location:/repertoire");
}

include_once 'header.php';
$contact=getcontact();
if (isset($_POST['btnUpProfil'])){
    extract($_POST);
    if(modifier($nom,$id) == 1){
        header("location:/repertoire/accueil.php?p=gProfil");
    }
}
if(isset($_GET['idEmployeSup'])){
    
    if(supprimerEmp($_GET['idEmployeSup']) == 1){
        header("location:/banque_l2gl/accueil.php?p=gEmploye");
    }
}
?>


<nav class="navbar navbar-expand-lg navbar-dark indigo">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
       
        <span  class="navbar-text white-text">
            <a href="?btnDecon" class="btn btn-danger btn-sm">Se déconnecter</a>
        </span>
    </div>
</nav>
<div class="card mt-4 container col-md-10">

<h5 class="card-header aqua-gradient white-text text-center py-4">
  <strong>NOUVEAU CONTACT </strong>
</h5>
<div class="card-body">
  <form method="post">
    
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
        <label for="">TELEPHONE</label>
      </div>
      <div class="col-md-5">
        <input type="number" name="tel" class="form-control">
      </div>
    </div>

   
    
   
    
 
 <?php  if(isset($_POST['ajout'] ))
{
  extract($_POST);
  if ( addcontact ( $nom , $prenom ,$tel)==1)
   {
    header("location:/repertoire/accueil.php");
  
  }
} 
 ?>  
    <div class="row mt-4">
      <div class="col-md-3 offset-4">
  <input type="submit" name="ajout" value="Ajouter" class="btn btn-primary btn-sm">
      </div>
    </div>
  </form>
</div>
 </div>


 <div class="card mt-3 container col-md-11">

  <h5 class="card-header aqua-gradient white-text text-center py-4">
    <strong> LISTE DES CONTACTS</strong>
  </h5>

  
       <div class="card-body px-lg-5 pt-0">
         <table style="text-align: center; text-transform: unset;" class="table table-info" >
           <tr >
             <th class="h3"># </th>
             <th class="h3">NOM</th>
             <th class="h3">PRENOM </th>
             <th class="h3">TELEPHONE</th>
             <th class="h3">ACTIONS</th>
             
           </tr>
           <?php 
  foreach($contact as $c){
    ?>
    <tr>
      <td><?= $c['idcontact']?></td>
      <td><?= strtoupper($c['nom'])?></td>
      <td><?= ucfirst ( $c['prenom'])?></td>
      <td><?= $c['tel']?></td>
      <td colspan="2"><a href="/repertoire/accueil.php?c=modifier<?= $c['idcontact']?>" class="btn btn-sm btn-warning">Modifier</a>
                                    <a href="repertoire/accueil.php?<?= $c['idcontact']?>" class="btn btn-sm btn-danger">Supprimer</a></td>

      
    </tr>
    <?php } 
  
  ?>
        
         </table>

   </div>  
     
   </div>