
<?php 
	include_once 'header.php';
 // include_once ('menu.php');
 
 ?>
 

 <div class="container mt-4">
 	<span class="text-uppercase h2 red-text">bienvenue sur la page de connexion</span>
 </div>
 <!-- Material form login -->
<div class="card mt-4 container col-md-4">

  <h5 class="card-header aqua-gradient white-text text-center py-4">
    <strong>AUTHENTIFICATION</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form method="post" action="/limamou/projet1/controller/traitement.php" class="text-center" style="color: #757575;" action="#!">

      <!-- Email -->
      <div class="md-form">
        <input type="text" name="login" required id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">NOM UTILISATEUR</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" name="mdp" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">MOT DE PASSE</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          
        </div>
        
      </div>

      <!-- Sign in button -->
      <button class="btn blue-gradient btn-rounded  my-4 waves-effect z-depth-0" type="submit" name="btnconnecter">SE CONNECTER</button>

      <!-- Register -->
    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
<?php 
	if (isset($_GET['erreur'])) {
		echo '<div class="h2 text-center red-text container col-md-6">Login ou mot de passe incorrect!</div>';
	}
 ?>
<?php  
		include_once 'footer.php';
 ?>