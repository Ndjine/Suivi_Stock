
    <?php
    session_start();
    require_once 'src/model/UserDB.php';
    
    if(isset($_POST['btnConnecter'])){
        extract($_POST);
        $users = findUserByLogin($email,$password);
        //var_dump($employe);die;
        if($users != null){
            $_SESSION['id'] = $users['idUsr'];
            $_SESSION['nom'] = $users['nomUser'];
            $_SESSION['prenom'] = $users['prenomUser'];
            $_SESSION['email'] = $users['email'];
          
            header("location:/SuiviStock_test/accueil.php");
        } else{
            header("location:/SuiviStock/index.php?erreur");
        }
    }

    include_once 'header.php';
    ?>
	<?php
    if (isset($_GET['erreur'])){
        echo '<div class="h2 text-center red-text container col-md-6"> Login ou Mot de Passe incorrect !</div>';
    }
?>  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="public/login/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              
            </div>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="email">Username</label>
                <input name="email" type="text" class="form-control" id="email">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input name ="password" type="password" class="form-control" id="password">
                
              </div>
              
            

              <input type="submit" name="btnConnecter" value="Login" class="btn btn-block btn-primary">

              <span class="d-block text-left my-4 text-muted"></span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    
    <?php
    include_once 'footer.php';
?>
	
