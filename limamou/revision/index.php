<?php
include_once 'pages/menu.php';
?>
<div class="contenu">
	<?php 
	if(isset($_GET['pages'])){
switch ($_GET['pages']) {
	case 'acceuil':
		include_once 'pages/acceuil.php';
		break;
	case 'tableaux':
		include_once 'pages/tableaux.php';
		break;
		case 'supers':
		include_once 'pages/supers.php';
		break;
	default:
		include_once 'pages/erreur.php';

}
 else{
	include_once 'pages/acceuil.php';
}

	}

	 ?>
	
</div>