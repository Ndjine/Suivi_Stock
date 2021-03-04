<?php 
	session_start();
	if (!isset($_SESSION['user'])) {
		header('location:/supermarche/');
	}
	$user = $_SESSION['user'];
	//echo 'Bienvenue Mr '.$_SESSION["user"]["nom"].' '.$_SESSION["user"]["prenom"];

	include 'topBar.php';

	echo '<div class="container">';


	if (isset($_GET['view'])) {
		switch ($_GET['view']) {
			case 'accueil':
				include 'pageAccueil.php';
				break;
			case 'newProd':
				include 'nouveauProduit.php';
				break;
			case 'liste':
				include 'listeProduit.php';
				break;
			
			default:
				include 'erreur.php';
				break;
		}
	}
	else
	{
		include 'pageAccueil.php';
	}

	echo "</div>";

	include 'footer.php';
?>