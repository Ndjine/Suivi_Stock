<?php
// On démarre la session
session_start ();

// On détruit les variables de notre session


// On détruit notre session
session_regenerate_id(true);

// On redirige le visiteur vers la page d'accueil
header ('location: index.php');
?>