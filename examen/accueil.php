<?php
session_start();
require_once 'fonctions/requetes.php';


if (empty($_SESSION)){
    header("location:/examen");
}

if (isset($_GET['btnDecon'])){
    session_unset();
    header("location:/examen");
}

include_once 'header.php';
$joueur=getjoueur();
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
  <strong>NOUVEAU JOUEUR </strong>
</h5>
<div class="card-body">
  <form method="post">
    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">NUMERO</label>
      </div>
      <div class="col-md-5">
        <input  type="number"   name="nummaillot" class="form-control " min="1" max="22" >
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
        <label for="">NATIONALITE</label>
      </div>
      <div class="col-md-5">
        <input type="text" name="nationalite" class="form-control">
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">CLUB</label>
      </div>
      <div class="col-md-5">
        <input type="text" name="club" class="form-control">
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">NOMBRE DE BUTS</label>
      </div>
      <div class="col-md-5">
        <input type="number" name="nbbut" class="form-control" >
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-3">
        <label for="">AGE</label>
      </div>
      <div class="col-md-5">
        <input type="number" name="age" class="form-control" min="16">
      </div>
    </div>
 <?php  if(isset($_POST['ajout'] ))
{
  extract($_POST);
  if ( addjoueur ($nummaillot , $nom , $prenom ,$nationalite ,$club ,$nbbut,$age)==1)
   {
    header("location:/examen/accueil.php");
  
  }
} 
 ?>  
    <div class="row mt-4">
      <div class="col-md-3 offset-4">
  <input type="submit" name="ajout" value="Enregistrement" class="btn btn-primary btn-sm">
      </div>
    </div>
  </form>
</div>
 </div>


 <div class="card mt-4 container col-md-12">

  <h5 class="card-header aqua-gradient white-text text-center py-4">
    <strong> LISTE DES JOUEUR</strong>
  </h5>

  
       <div class="card-body px-lg-5 pt-0">
         <table style="text-align: center; text-transform: unset;" class="table table-info" >
           <tr >
             <th class="h3">MAILLOT </th>
             <th class="h3">NOM</th>
             <th class="h3">PRENOM </th>
             <th class="h3">CLUB</th>
             <th class="h3">NOMBRE BUT</th>
             <th class="h3">AGE</th>
             <th class="h3">NATIONALITE</th>
           </tr>
           <?php 
  foreach($joueur as $j){
    ?>
    <tr>
      <td><?= $j['nummaillot']?></td>
      <td><?= strtoupper($j['nom'])?></td>
      <td><?= ucfirst ( $j['prenom'])?></td>
      <td><?= strtoupper($j['club'])?></td>
      <td><?= $j['nbbut']?></td>
      <td><?= $j['age']?></td>
      <td><?= strtoupper($j['nationalite'])?></td>
      
    </tr>
    <?php } 
  
  ?>
        
         </table>

   </div>  
     
   </div>