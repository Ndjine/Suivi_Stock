<?php 
include 'public/topbar.php';
 ?>

 <div class="container">
 	
 	<?php 
 	if (isset($_GET['p'])) {
 		# code...
 		switch ($_GET['p']) {
 			case 'accueil':
 				include_once'pages/accueil.php'
 				break;

 				case 'present':
 				include_once'pages/presentation.php'
 				break;

 				case 'change':
 				include_once'pages/change.php'
 				break;
 			
 			default:
 				include 'pages/Erreur.php'
 				break;
 		}
 		else
 		{
 			case 'accueil':
 				include_once'pages/accueil'
 				break;
 		}
 	}
 	 ?>

 </div>