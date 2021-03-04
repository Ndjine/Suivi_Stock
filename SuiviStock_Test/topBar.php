<?php
//include_once 'header.php';
?>
<?php
//Suppression
//session_start();
require_once 'header.php';
//require_once 'src/model/ProduitDB.php';
//  if(isset($_GET['idprodSup'])){
  
	
	
//      if(supprimerprod($_GET['idprodSup']) == 1){
//          header("/SuiviStock/src/view/produit/listproduit.php");
//      }
// }
$produit = getProduit();
//$idUserSup= supprimerUser($id);
//include_once '../../../topBar.php'
?>
<div class="wrapper">
  <!-- Navbar -->
 
  <!-- /.navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"  role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a  href="src/view/produit/addproduit.php" class="nav-link">Ajouter Produit</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="src/view/produit/listproduit.php"  class="nav-link">Lister Produit</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
   

    
    <ul class="navbar-nav ml-auto">
     
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
     
      
      
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                MENU
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="src/view/User/liste.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lister User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="src/view/User/insertion.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter User</p>
                </a>
              </li>
              <!-- <li class="nav-item">
            
                <a href="src/view/produit/listproduit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lister User</p>
                </a>
              </li>
               -->
             
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Statistique</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="?btnDecon" class="btn btn-block btn-primary">
              <i class="far fa-circle nav-icon"></i>
              Se déconnecter </a>
                  
              </li>
             
            </ul>
          </li>
         
        </ul>
      </nav> 
      <!-- /.sidebar-menu -->
    </div> 
    <!-- /.sidebar -->
  </aside> 
  <!-- Main Sidebar Container -->
 
  <!-- Content Wrapper. Contains page content -->

<!-- ./wrapper -->
<?php
include_once 'footer.php';
?>