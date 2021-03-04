<?php
    session_start();
    require_once 'src/model/UserDB.php';
    require_once 'src/model/ProduitDB.php';
   // require_once 'index.php';
   
   if (empty($_SESSION)){
    header("location:/SuiviStock");
}

if (isset($_GET['btnDecon'])){
    session_unset();
    header("location:/SuiviStock");
}
include_once 'header.php';
include_once 'topBar.php';
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">   
      
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
       <div class="container  mt-4 text-primary bg-dark text-uppercase h1">
    Bienvenue dans l'Application SuiviStock concu pour le stockage de produit
       </div>
      <section class="content">
      <div class="container-fluid">
         <div class="row">
          <div class="col-lg-3 col-5">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-5">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-4">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-5">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div>
        </select>
       
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
 
 
 
 
 <?php
include_once 'footer.php';
?>