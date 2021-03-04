<?php
include_once 'header.php';
?>
<?php
//Suppression
session_start();

require_once 'header.php';
require_once 'src/model/ProduitDB.php';
 if(isset($_GET['idprodSup'])){
  
	
	
     if(supprimerprod($_GET['idprodSup']) == 1){
         header("/SuiviStock/src/view/produit/listproduit.php");
     }
}
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">   
      
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container mt-4">
    <div class="row">
        <div class="col-md-2 offset-10">
            <a href="/SuiviStock/src/view/produit/addproduit.php" class="btn btn-info " style="text-decoration: none;color: white">Ajouter</a>
        </div>
      
       
    </div>

    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info text-center text-uppercase">
                    <h2>Liste des Produit</h2>
                </div>
                <div class="card-body">
                    <table class="table-info table">
                        <tr>
                            <th class="font-weight-bold text-uppercase">Id</th>
                            <th class="font-weight-bold text-uppercase">nomProduit</th>
                            <th class="font-weight-bold text-uppercase">Reference</th>
                            <th class="font-weight-bold text-uppercase">Quantite</th>
                            
                            <th class="font-weight-bold text-uppercase" colspan="2">Actions</th>
                        </tr>
                        <?php
						
                        foreach ($produit as $p){
                            ?>
                            <tr>
                                <td><?= $p['id'] ?></td>
                                <td><?= strtoupper($p['nomProduit']) ?></td>
                                <td><?= ucfirst($p['ref']) ?></td>
                                <td><?= $p['qtStock'] ?></td>
                                <td colspan="2"><a href="/SuiviStock/src/view/produit/modproduit.php?p=modifierprod&idP=<?= $p['id']?>" class="btn btn-warning"style="text-decoration: none;text-align:center;">Modifier</a>
                                    <a <?= $p['id']  ?> href="/SuiviStock/src/view/produit/listproduit.php?idprodSup=<?= $p['id']?>" class="btn btn-danger"style="text-decoration: none;">Supprimer</a></td>
                            </tr>
                        <?php  }
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->
<?php
include_once 'footer.php';
?>