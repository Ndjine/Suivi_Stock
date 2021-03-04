<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';
	echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
	echo '<br />';

	// On affiche un lien pour fermer notre session
	echo '<a href="./logout.php">Déconnection</a>';
}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>


Voyons alors le code de la page permettant au membre de se déconnecter (la page logout.php).
On aura alors :

exemple4.php
<?php
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header ('location: index.htm');
?>