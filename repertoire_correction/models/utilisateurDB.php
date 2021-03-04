<?php 
	require_once 'bdd.php';

	function findUserByLoginAndPass($login, $mdp){
		//On définit la la requete
		$sql = "SELECT * FROM utilisateur WHERE login='$login' AND mdp='$mdp'";
		//on recupère la variable qui a été définit dans bdd.php 
		// Cette variable contient la liaison à la BD Donc il nous
		// permettra d'accèder aux fonctions d'exécution des requêtes
		global $base; // Obligatoirement, on met le mm nom que dans 
		//bdd.php

		// Exécution de la requête

		$exe = $base->query($sql); //on utilise la fonction query car on 
		//a une requête SELECT

		// Retourner le résultat trouvé

		return $exe->fetch(); // fetch() parsk cette requete retourne au 
		//plus un résultat
	}

	
 ?>	